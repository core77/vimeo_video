<?php

namespace Concrete\Package\VimeoVideo\Block\VimeoVideo;

use Concrete\Core\Block\BlockController;

class Controller extends BlockController
{
    /**
    * @var string|null
     */
    public $videoID;

    protected $btTable = 'btVimeoVideo';
    protected $btInterfaceWidth = '400';
    protected $btInterfaceHeight = '300';
    protected $btCacheBlockRecord = true;
    protected $btCacheBlockOutput = true;
    protected $btCacheBlockOutputOnPost = true;
    protected $btCacheBlockOutputForRegisteredUsers = true;

    public function getBlockTypeName()
    {
        return t('Vimeo Video');
    }

    public function getBlockTypeDescription()
    {
        return t('Ein Vimeo Video auf der Seite einbetten.');
    }

    public function view()
    {
        $videoID = $this->videoID;
        $this->set('videoID', (string) $videoID);
    }
}