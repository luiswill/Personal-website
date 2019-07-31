<?php

function luis_display_home_block($id, $textImage, $textImageSubheadline)
{

    $html = <<<EOT
        <div class="col-12 col-sm-6 col-lg-3">
            <a href="pages/$id.php">
                <div class="category category--$id">
                    <div class="overlay">
                        <div class="textImage">$textImage<br><span class="textImageSubheadline">$textImageSubheadline</span></div>
                    </div>
                </div>
            </a>
        </div>
EOT;

    echo $html;
}
