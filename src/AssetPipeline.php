<?php

class AssetPipeline
{
    private $builderInstances = [];
    private $pipeline;
    private $builderRegistry = [];
    
    private function getBuilderInstance($tag)
    {
        if(!isset($this->builderInstances[$tag])) {
            $this->builderInstances[$tag] = new ($this->builderRegistry[$tag])();
        }
        return $this->builderInstances[$tag];
    }
    
    public function define(array $pipeline)
    {
        
    }
    
    public function registerBuilder(string $tag, string $class)
    {
        $this->builderRegistry[$tag] = $class;
    }
    
    public function build()
    {
        
    }
}
