<?php
namespace app\components;
use yii\base\Widget;
use app\models\Article;


class AdsWidget extends Widget{

    public $tpl;
    public $data;
    public $tree;
    public $image;
    public $menuHtml;

    public function init()
    {
        parent::init();
        if( $this->data === null )
        {
            $this->data = 'Гость';
        }
    }

    public function run(){
        $this->data = Article::find()->all();
        return $this->data;

    }

    protected function getTree(){
        $tree = [];
        foreach ($this->data as $id=>&$node) {
            if (!$node['parent_id'])
                $tree[$id] = &$node;
            else
                $this->data[$node['parent_id']]['childs'][$node['id']] = &$node;
        }
        return $tree;
    }

    protected function getMenuHtml($data){
        $str = '';
        foreach ($data as $article) {
            $str .= $this->catToTemplate($article);
        }
        return $str;
    }

    protected function catToTemplate($category){
        ob_start();
        include __DIR__ . '/ads/' . $this->tpl;
        return ob_get_clean();
    }

}