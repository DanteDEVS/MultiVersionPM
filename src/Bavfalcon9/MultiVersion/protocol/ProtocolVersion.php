<?php

declare(strict_types=1);

namespace Bavfalcon9\MultiVersion\protocol;

class ProtocolVersion {
    public const v1_17_40 = 471; # Current Pm Version
    public const v1_17_30 = 465;
    public const v1_17_10 = 448;
    public const v1_17_0 = 440;
    public const v1_16_220 = 431;
    public const v1_16_200 = 422;
    public const v1_16_100 = 418;
    public const v1_16_20 = 408;
    public const v1_16_0 = 407;
    public const v1_14_60 = 390;
    public const v1_13_0 = 388;
    public const v1_12_0 = 361;

    public const SUPPORTED_CLIENTS = [
    public const v1_17_30 = 465;
    public const v1_17_10 = 448;
    public const v1_17_0 = 440;
    public const v1_16_220 = 431;
    public const v1_16_200 = 422;
    public const v1_16_100 = 418;
    public const v1_16_20 = 408;
    public const v1_16_0 = 407;
    public const v1_14_60 = 390;
    public const v1_13_0 = 388;
    public const v1_12_0 = 361;
    ];

    public const SUPPORTED_SERVERS = [
        self::v1_17_20
    ];

    /**
     * This will be changed by a config
     */
    public static array $ALLOWED = [];
}
