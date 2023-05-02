<?php

namespace PowerComponents\LivewirePowerGrid;

final class Header
{
    public string $name = 'header';

    public bool $searchInput = false;

    public string $searchPlaceholder;

    public bool $toggleColumns = false;

    public bool $softDeletes = false;

    public bool $showMessageSoftDeletes = false;

    public string $includeViewOnTop = '';

    public string $includeViewOnBottom = '';

    public static function make(): self
    {
        return new Header();
    }

    /**
     * @return $this
     * Show search input into component
     */
    public function showSearchInput(string $placeholder = null): Header
    {
        $this->searchInput = true;

		if($placeholder){
			$this->searchPlaceholder = $placeholder;
		}

        return $this;
    }

    public function showSoftDeletes(bool $showMessage = true): Header
    {
        $this->softDeletes            = true;
        $this->showMessageSoftDeletes = $showMessage;

        return $this;
    }

    /**
     * default false
     */
    public function showToggleColumns(): Header
    {
        $this->toggleColumns = true;

        return $this;
    }

    /**
     * Include custom view on top
     */
    public function includeViewOnTop(string $viewPath): Header
    {
        $this->includeViewOnTop = $viewPath;

        return $this;
    }

    /**
     * Include custom view on bottom
     */
    public function includeViewOnBottom(string $viewPath): Header
    {
        $this->includeViewOnBottom = $viewPath;

        return $this;
    }
}
