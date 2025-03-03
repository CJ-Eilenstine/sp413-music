<?php function bma_custom_blocks_init()
{
    register_block_type(__DIR__ . "/build/main-nav");
    register_block_type(__DIR__ . "/build/instructors");
    register_block_type(__DIR__ . "/build/instruments");
}

add_action("init", "bma_custom_blocks_init");