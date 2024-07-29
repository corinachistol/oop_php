<?

    interface SwitchableInterface{
        public function turnOn(): void;
        public function turnOff(): void;

        public function isOn(): bool;
    }