<?php

namespace Concrete\Package\VimeoVideo;

use Concrete\Core\Block\BlockType\BlockType;
use Concrete\Core\Block\BlockType\Set as BlockTypeSet;
use Concrete\Core\Package\Package;

class Controller extends Package
{
    protected $appVersionRequired = '9.2.0';
    protected $pkgHandle = 'vimeo_video';
    protected $pkgVersion = '1.0.0';

    public function getPackageName()
    {
        return t('Vimeo Video');
    }

    public function getPackageDescription()
    {
        return t('A block to embed videos from Vimeo.');
    }

    public function install()
    {
        $pkg = parent::install();

        // install block
        BlockType::installBlockType('vimeo_video', $pkg);

        $bt = BlockType::getByHandle('vimeo_video');
        $btSet = BlockTypeSet::getByHandle('multimedia');

        if (is_object($bt) && is_object($btSet)) {
            $btSet->addBlockType($bt);
        }
    }

    public function upgrade()
    {
        parent::upgrade();
    }
}