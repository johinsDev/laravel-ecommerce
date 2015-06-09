<?php
namespace ANavallaSuiza\Tests\Product\Models;

use ANavallaSuiza\Tests\TestBase;
use ANavallaSuiza\Ecommerce\Product\Models\Product;
use ANavallaSuiza\Ecommerce\Product\Models\ProductInterface;

class ProductTest extends TestBase
{
    private function getInstance($id = null)
    {
        if (isset($id)) {
            return Product::find($id);
        }

        return new Product;
    }

    public function testImplementsProductInterface()
    {
        $this->assertTrue($this->getInstance() instanceof ProductInterface);
    }
}
