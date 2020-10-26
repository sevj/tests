<?php

namespace spec\App;

use App\HelloWorld;
use PhpSpec\ObjectBehavior;

class HelloWorldSpec extends ObjectBehavior
{
    public function it_is_initializable()
    {
        $this->shouldHaveType(HelloWorld::class);
    }

    public function it_converts_plain_text_to_html_paragraphs()
    {
        $this->say()->shouldReturn("Hello World");
    }
}
