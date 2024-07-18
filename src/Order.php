<?
    // declare(strict_types=1);

    class Order{
        private array $items;
        private Money $total;
        
        public function __construct(){
            $this->items = [];
            $this->total = new Money(0, "MDL");
        }

        public function addItem(Item $item): void {
            $this->items[] = $item;
            $this->adjustTotal($item->getAppliance()->__get('price'), $item->getQuantity());
        }

        //Hw*: create the removeItem(index) - done
        public function removeItem($index): void{
            if(array_key_exists($index, $this->items)){
                unset($this->items[$index]);
                $this->items = array_values($this->items);
            }
        }
        //HW*: create the changeItemQuantity(index,quantity) -done
        public function changeItemQuantity($index, $quantity) {
            if (array_key_exists($index, $this->items)){
                $this->items[$index]->__set('quantity',$quantity);
            }
        }

        private function adjustTotal(Money $price, int $quantity): void {
            $this->total = new Money(
                $this->total->getAmount() + $price->getAmount() * $quantity,
                $price->getCurrency()
            );
        }

    }