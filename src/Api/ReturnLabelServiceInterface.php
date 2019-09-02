<?php
/**
 * See LICENSE.md for license details.
 */
declare(strict_types=1);

namespace Dhl\Sdk\Paket\Retoure\Api;

use Dhl\Sdk\Paket\Retoure\Api\Data\ConfirmationInterface;

/**
 * Interface ReturnLabelServiceInterface
 *
 * @api
 * @package Dhl\Sdk\Paket\Retoure\Api
 * @author  Christoph Aßmann <christoph.assmann@netresearch.de>
 * @link    https://www.netresearch.de/
 */
interface ReturnLabelServiceInterface
{
    /**
     * BookLabel is the operation call used to generate return labels.
     *
     * @param \JsonSerializable $returnOrder
     * @return ConfirmationInterface
     */
    public function bookLabel(\JsonSerializable $returnOrder): ConfirmationInterface;
}
