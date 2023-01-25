<?php
require_once "InterfaceVideo.php";
require_once "Youtube.php";
require_once "Vimeo.php";
use PHPUnit\Framework\TestCase;

class VideoTest extends TestCase{


    public function testName() {
        $videos[] = new Youtube('SURVIVE Trailer German Deutsch (2022)', '', '', '');;
        $videos[] = new Vimeo('Cooles Video', '', '', '');

        $this->assertEquals('SURVIVE Trailer German Deutsch (2022)', $videos[0]->getName());
        $this->assertSame('Cooles Video', $videos[1]->getName());

    }

    public function testError(){
        $this->expectException(ArgumentCountError::class);
        $videos[] = new Youtube('', 'https://www.youtube.com/embed/xe_2QMZ7OKs');
    }

    public function testSource(){
        $videos[] = new Youtube('', 'https://www.youtube.com/embed/xe_2QMZ7OKs', '', '');
        $videos[] = new Vimeo('', 'https://player.vimeo.com/video/202696600?h=c3a851aff4', '', '');

        $this->assertSame('https://www.youtube.com/embed/xe_2QMZ7OKs', $videos[0]->getSource());
        $this->assertEquals('https://player.vimeo.com/video/202696600?h=c3a851aff4', $videos[1]->getSource());
    }

    public function testHTMLCode(){
        $videos[] = new Youtube('', '', '<iframe src="https://www.youtube.com/embed/xe_2QMZ7OKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '');
        $videos[] = new Vimeo('', '', '<iframe src="https://player.vimeo.com/video/202696600?h=c3a851aff4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', '');

        $this->assertEquals('<iframe src="https://www.youtube.com/embed/xe_2QMZ7OKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', $videos[0]->getHtmlCode());
        $this->assertSame('<iframe src="https://player.vimeo.com/video/202696600?h=c3a851aff4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', $videos[1]->getHtmlCode());
    }

    public function testTime() {
        $videos[] = new Youtube('', '', '', '1:34');
        $videos[] = new Vimeo('', '', '', '');

        $this->assertSame('1:34', $videos[0]->getTime());
        $this->assertEquals('', $videos[1]->getTime());
    }
}
