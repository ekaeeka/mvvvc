<?php
class View{
    function generate($content_view,$template_view, $data = null){
        include 'application/views/'.$content_view;
    }
}
