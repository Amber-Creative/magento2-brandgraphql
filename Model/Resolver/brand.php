<?php
declare(strict_types=1);

namespace Ambercreative\BrandGraphQl\Model\Resolver;

use Magento\Catalog\Model\Product;
use Magento\Framework\Exception\LocalizedException;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Query\ResolverInterface;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;

/**
 * Resolve data for product Brand name
 */
class Brand implements ResolverInterface
{
    /**
     * @inheritdoc
     */
    public function resolve(
        Field $field,
        $context,
        ResolveInfo $info,
        array $value = null,
        array $args = null
    ) {
        if (!isset($value['model'])) {
            throw new LocalizedException(__('"model" value should be specified'));
        }

        /* @var $product Product */
        $product = $value['model'];
        $optionText = '';
        $attr = $product->getResource()->getAttribute('manufacturer');
        if ($attr->usesSource()) {
            $optionText = $attr->getSource()->getOptionText($product->getManufacturer());
        }

        return ($optionText) ? : '';
    }
}
