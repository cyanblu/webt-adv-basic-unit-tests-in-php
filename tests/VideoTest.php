<?php
require_once "InterfaceVideo.php";
require_once "Youtube.php";
require_once "Vimeo.php";

class VideoTest extends \PHPUnit\Framework\TestCase{
    public function testVideo() {
        $videos[] = new Youtube('SURVIVE Trailer German Deutsch (2022)', 'https://www.youtube.com/embed/xe_2QMZ7OKs', '<iframe src="https://www.youtube.com/embed/xe_2QMZ7OKs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'Dauer - 2:16');
        $videos[] = new Vimeo('', '', '<iframe src="https://player.vimeo.com/video/202696600?h=c3a851aff4" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>', 'Dauer - 2:16');

        $this->assertEquals('SURVIVE Trailer German Deutsch (2022)', $videos[0]->getName());
    }
}
