<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\URL;

class SitemapController extends Controller
{
    

    public function index()
    {
        // Get all dynamic URLs for the sitemap
        $urls = $this->getDynamicUrls();

        // Generate the sitemap XML
        $xml = $this->generateSitemapXML($urls);

        // Return the XML response with the appropriate content-type
        return Response::make($xml, 200, ['Content-Type' => 'application/xml']);
    }

    private function getDynamicUrls()
    {
        $urls = [];

        $urls = [
            [
            'url' => URL::to('/'),
            'priority' => '1.0',
            ],
            [
                'url' => URL::to('/compress'),
                'priority' => '0.8',
                ],
                [
                    'url' => URL::to('/partner'),
                    'priority' => '0.8',
                    ],
                    [
                        'url' => URL::to('/contact-us'),
                        'priority' => '0.8',
                        ],
                         [
                            'url' => URL::to('/terms-and-condition'),
                            'priority' => '0.8',
                            ],
                            [
                                'url' => URL::to('/check-responsiveness'),
                                'priority' => '0.8',
                                ],
                                [
                                    'url' => URL::to('/how-its-works'),
                                    'priority' => '0.8',
                                    ],
                                    [
                                        'url' => URL::to('/privacy-policy'),
                                        'priority' => '0.8',
                                        ],
                                        [
                                            'url' => URL::to('/login'),
                                            'priority' => '0.8',
                                            ],
                                            [
                                                'url' => URL::to('/register'),
                                                'priority' => '0.8',
                                                ],
                                                [
                                                    'url' => URL::to('/png-to-webp'),
                                                    'priority' => '0.8',
                                                    ],
                                                    [
                                                        'url' => URL::to('/jpeg-to-webp'),
                                                        'priority' => '0.8',
                                                        ],
                                                        [
                                                            'url' => URL::to('/jpg-to-webp'),
                                                            'priority' => '0.8',
                                                            ],
                                                            [
                                                                'url' => URL::to('/jpeg-to-pdf'),
                                                                'priority' => '0.8',
                                                                ],
                                                                [
                                                                    'url' => URL::to('/png-to-pdf'),
                                                                    'priority' => '0.8',
                                                                    ],
                                                                    [
                                                                        'url' => URL::to('/png-to-gif'),
                                                                        'priority' => '0.8',
                                                                        ],
                                                                        [
                                                                            'url' => URL::to('/jpeg-to-gif'),
                                                                            'priority' => '0.8',
                                                                            ],
                                                                            [
                                                                                'url' => URL::to('/jpg-to-gif'),
                                                                                'priority' => '0.8',
                                                                                ],
                                                                                [
                                                                                    'url' => URL::to('/webp-to-gif'),
                                                                                    'priority' => '0.8',
                                                                                    ],
                                                                                    [
                                                                                        'url' => URL::to('/gif-to-pdf'),
                                                                                        'priority' => '0.8',
                                                                                        ],
                                                                                        [
                                                                                            'url' => URL::to('/webp-to-png'),
                                                                                            'priority' => '0.8',
                                                                                            ],
                                                                                            [
                                                                                                'url' => URL::to('/webp-to-jpg'),
                                                                                                'priority' => '0.8',
                                                                                                ],
                                                                                                [
                                                                                                    'url' => URL::to('/webp-to-jpeg'),
                                                                                                    'priority' => '0.8',
                                                                                                    ],
                                                                                                    [
                                                                                                        'url' => URL::to('/webp-to-pdf'),
                                                                                                        'priority' => '0.8',
                                                                                                        ],
                                                                                                        [
                                                                                                            'url' => URL::to('/gif-to-webp'),
                                                                                                            'priority' => '0.8',
                                                                                                            ],

        ];

        $blogs = Blog::where('status',1)->get(); 
        foreach ($blogs as $blog) {
            $urls[] = [
                'url' => URL::to('/blog/' . $blog->slug), 
                'priority' => '0.8', 
            ];
        }

        return $urls;
    }

    private function generateSitemapXML($urls)
    {
        // Generate the sitemap XML content
        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $item) {
            $url = $item['url'];
            $priority = $item['priority'];

            $xml .= '<url>' . "\n";
            $xml .= '<loc>' . htmlspecialchars($url, ENT_QUOTES | ENT_XML1, 'UTF-8') . '</loc>' . "\n";
            $xml .= '<priority>' . $priority . '</priority>' . "\n";
            $xml .= '</url>' . "\n";
        }

        $xml .= '</urlset>';

        return $xml;
    }


}
