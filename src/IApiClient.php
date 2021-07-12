<?php

namespace BookingProtect\InsuranceHub\Client;

interface IApiClient {
    public function getOffering(OfferingRequest $offeringRequest): Offering;

    public function submitOfferingResult(OfferingResult $offeringResult): bool;

    public function getMatrix(MatrixRequest $matrixRequest): ?Matrix;

    public function getPriceBand(PriceBandRequest $priceBandRequest): ?PriceBand;

    /**
     * @return Policy[]
     */
    public function searchForPolicy(PolicySearch $policySearch): array;

    public function searchForPolicyByOfferingId(PolicySearchByOfferingId $policySearch): ?Policy;

    public function getAdjustmentOffering(AdjustmentRequest $adjustmentRequest): AdjustmentOffering;

    public function submitAdjustmentResult(AdjustmentOfferingResult $adjustmentResult): bool;

    public function cancelSale(CancellationRequest $cancellationRequest): bool;
}