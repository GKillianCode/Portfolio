<?php

class InlineMessagesDTO
{
    private array $inlineMessageArray;

    public function __construct(array $InlineMessageArray)
    {
        $this->inlineMessageArray = $InlineMessageArray;
    }

    public function getInlineMessageArray(): array
    {
        return $this->inlineMessageArray;
    }
}
