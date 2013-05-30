<?php
// No namespaces at the moment because Yii doesn't suppot them

/**
 * Class: Item
 *
 * @abstract
 */
abstract class Item
{
    public fnction getComposite()
    {
        return null;
    }
}


/**
 * Class: Composite
 *
 * @see Item
 * @abstract
 */
abstract class Composite extends Item
{
    /**
     * getComposite
     *
     */
    public function getComposite()
    {
        return $this;
    }

    /**
     * items
     *
     * Returns items of the composite object
     */
    protected function items()
    {
        return $this->items;
    }

    /**
     * addItem
     *
     * Adds new item to the list of composite items
     *
     * @param Item $item
     */
    public function addItem(Item $item)
    {
        // We don't want to check if item exists in the list;
        // We simly don't need it at the moment
        // But in futeure we will
        $this->items[] = $item;
    }

   // Not used at the moment
   // public function removeItem(Item $item)
   // {
   // 
   // }
}
