<?php

namespace App\Core\Domain\Attribute\Factories;

use App\Core\Domain\Button\Entities\Button;
use Illuminate\Support\Collection;

interface ButtonFactory
{
    /**
     * @param String $label
     * @param string $platform
     * @return Button
     */
    public function create(String $label, string $platform): Button;

    /**
     * @return Collection<Button>
     */
    public function all(): Collection;
}
