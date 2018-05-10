<?php
namespace Core;

class TemplateEngine
{
    public $content;

    public function __construct($file){
        $this->file;
    }

    public function modify_content(){
        $this->content=file_get_contents($this->file);


        $arr2=[
            '/{{(.*)}}/',
            '~@if\(([^()]*+(?:\((?-1)\)[^()]*)*+)\)~',
            '~@elseif\(([^()]*+(?:\((?-1)\)[^()]*)*+)\)~',
            '/\@else/u',
            '/\@endif/u',
            '~@foreach\(([^()]*+(?:\((?-1)\)[^()]*)*+)\)~',
            '/\@endforeach/u',
            '~@isset\(([^()]*+(?:\((?-1)\)[^()]*)*+)\)~',
            '/\@endisset/u',
            '~@empty\(([^()]*+(?:\((?-1)\)[^()]*)*+)\)~',
            '/\@endempty/u'
        ];

        $replacement2=[
            '<?=htmlspecialchars($1)?>',
            '<?php if($1): ?>',
            '<?php elseif($1):?>',
            '<?php else:?>',
            '<?php endif;?>',
            '<?php foreach($1):?>',
            '<?php endforeach;?>',
            '<?php if(isset($1)):?>',
            '<?php endif;?>',
            '<?php if(empty($1)):?>',
            '<?php endif;?>'
        ];



        $final2=preg_replace($arr2, $replacement2, $this->content);

        file_put_contents($this->file, $final2);
    }

}
