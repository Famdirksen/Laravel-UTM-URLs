<?php

namespace Famdirksen\LaravelUTMUrls\Middleware;

use Closure;

class SetUTMUrls
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (config('utm-urls.enabled', false)) {
            if ($this->hasToAppend($request)) {
                $response->setContent($this->appendUtmsToString($response->getContent()));
            }
        }

        return $response;
    }

    /**
     * Check if we need to set the UTM attributes.
     *
     * @param \Illuminate\Http\Request  $request
     * @return bool
     */
    public function hasToAppend($request)
    {
        if (! $request->headers->has('x-do-not-append-campagne')) {
            return true;
        }

        return false;
    }

    /**
     * Append the UTM attributes to all urls.
     *
     * @param $string
     * @return null|string|string[]
     */
    protected function appendUtmsToString($string)
    {
        $regex = '#(<a.*?href=")([^"]*)("[^>]*?>)#i';

        return preg_replace_callback($regex, function ($match) {
            $url = $match[2];

            //check if a href url is in skip link
            $aHrefLink = parse_url($url);

            if (isset($aHrefLink['host']) && ! empty($aHrefLink['host']) && in_array($aHrefLink['host'], config('utm-urls.skipped_hosts', []))) {
                return $match[0];
            } else {
                //check if there is a # in the url
                if (strpos($url, '#') === false) {
                    return $match[0];
                } else {
                    //check if there is already an ? in the url
                    if (strpos($url, '?') === false) {
                        $counter = 0;
                    } else {
                        $counter = 1;
                    }

                    //set all the utms
                    foreach (config('utm-urls.utms', []) as $utm => $value) {
                        if (!empty($value)) {
                            if ($counter == 0) {
                                $url .= '?';
                            } else {
                                $url .= '&';
                            }

                            $url .= 'utm_' . str_slug(strtolower($utm)) . '=' . $value;

                            $counter++;
                        }
                    }

                    return $match[1] . $url . $match[3];
                }
            }
        }, $string);
    }
}
