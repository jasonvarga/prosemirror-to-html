<?php

namespace ProseMirrorToHtml\Test\Nodes;

use ProseMirrorToHtml\Renderer;
use ProseMirrorToHtml\Test\TestCase;

class OrderedListTest extends TestCase
{
    /** @test */
    public function ordered_list_node_gets_rendered_correctly()
    {
        $json = [
            'type' => 'doc',
            'content' => [
                [
                    'type' => 'ordered_list',
                    'content' => [
                        [
                            'type' => 'list_item',
                            'content' => [
                                [
                                    'type' => 'text',
                                    'text' => 'first list item',
                                ],
                            ],
                        ],
                    ],
                ],
            ],
        ];

        $html = '<ol><li>first list item</li></ol>';

        $this->assertEquals($html, (new Renderer)->render($json));
    }
}
