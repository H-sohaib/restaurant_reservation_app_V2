<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;
use Ramsey\Uuid\Type\Integer;

class PriceCard extends Component
{
  /**
   * Create a new component instance.
   */
  public function __construct(
    public string $imagepath,
    public string $price,
    public string $name,
    public string $description,
    public int $cardid,
    public string $routepath,
  ) {
  }

  /**
   * Get the view / contents that represent the component.
   */
  public function render(): View|Closure|string
  {
    return view('components.price-card');
  }
}