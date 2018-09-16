<?php

return [
    'alipay' => [
        'app_id'         => '2016081600259828',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5YOVM0IsGqSaG7BS8/o+oXWcwblqy45Ro/YGDCE2z4JAWDhhi+PCxI8I6xZgZ/b5g4FZDLQRoqnlwGd5hSvqJU3JXpWiM8BGS7UL1KVm6qRlnts/BbEjim1+GES1ib8J7AWpRp/7Brgyk6SMcH/LXCVbR8kZYQLOAPqIpNdacyBNJEiNWjOUeSXXgqEfvfe2uQzlqcDl8yrQd6FlSjDG8SCSF4irg8BHyB6bmxKgapGZaBNJjmASlW7QasYk9ZMOeSLA4Kkwu7L3qWpEzt8RYuxDcmRqeJNaCkebVd6K56OAtU+m8hSK/ZaCPKvFeouKhUfrVLA0iUBUFfHhJlB6QIDAQAB',
        'private_key'    => 'MIIEowIBAAKCAQEAt/ULg/l0764MDcaQ6fjTXYuzqM+iXLHqHUeE+4I6b6eO09J8hDP3Zrj6toc2qfOeiJQ9pIA4yElel2BRvl2wpcLt0m8MTg01X9ZTiQOB8kZS8wM3YuO+XaOGTRpHqHmup5562VD/QRMKos3RyRNBNTCdbwX59EKBS7r1enGGlnjQStlacVDB3wGSQaQuqKeDZ+Vl0w9BBj9uFXLgEr9IH3zqPzalMrhcaAeGnRH2ZXuKkEuVOcx4/m+N5llZ1VKnjQTE+cg70lB9HazKrcdF5GKmTAHIYQZFJsDAaNGmT5TLqVBRNRaxTn9wTMvM/yrDIZJrJNG9wAmqAd1PqDK/EwIDAQABAoIBABpDrVI5cp2p3uS0ngoZ0avAf3Uxt/++Eyv9AxqZvFgmtzi9C7Qga0lKTdlzsrVPKCpd5/Mtr23BM/Uu9lzUqZzxGN17p2kZb65wPlsImiwKKFuz8Nt4orxh1ZH6l5KRVQNvmCCg9ODIpDMcacBotF2wxDmOw+JBAI7ccaH6xXmEJlIRySw4YmM1LV2/UjbtVsrU3YSoPLdQ56iXqMcO/ngg2lgiJFXtUMZUH/WCeA3MH1TkjXvLd5X+HMl8dnalcPVtdRK7Ip4StM2OS4qCmqDAzuGjBBWlUX+/Yow8Wu1as51+69BRrL4Mp24Cc1lBs1VHqs8qxKbfBHn/SBOs8bkCgYEA37KmWDxFQtx4alamCgXQGSuxULZGQ9KwkPSJTnS+XTqqSHPZsl7orOvS3tknzZpoKeQMJ9lWd1YmzUhIX9BsWa7BTM8640HUocFx4nLpxlqZcHlSB8Ty1kemIXAvGpV4wx+vgsujX1P/IHZ057b9aXahCdEnuHNjYmXdBGHf6RcCgYEA0oVRiOx5G5kF8/ACDnfmVVr97dZziTzs3uSvo6eV5rtdYopRJNaOhie5Jea0MQxnlfDXJqvPPePFdi8eMUgfr+1avQYvoZSULr5yapMROwxjCJ0Jt5Ai4xdwk1ObX4zCE7/d5BLmZC4P/T/B+D/30c1xXTM6SmsqATa5WYCuH2UCgYBx+GVD40EudYFsPEVQKfICQP6QLq3R9FA9KjminVw3x6HmVBAADtbg8y12mJDs8dRMM4H184dYOa5/PGqTVm89qgmWBqbsDig1WYeaZg2xH4u5gDZI+xD2F38O3kdBdhIW59fV/cZ41STQ90lMnTCzQNt/Uu63zSI/icJ3bx5TdQKBgDV4k1sZ5TDzTyXEgmE2ZxSrBfBRFgt3pBqBL3N774EpefC7fRzEOnMsx8Qusvn6Up0tDRjPbtYjclYwZZTS4umGehOk7Jg36uNskBctv6Sl4smfSYaMX7Aalgd1pvNAB1OI2k1B167+XCVQ+m2ZodJyQicQCfA5A/RG+BEZtCBZAoGBAJ7oj1vOsErL/7tLi6H7iWkp+q5YKXbzw1eHDQNdALpiVgeZH5ADfD3u6gSIDgilsHC9y8XSwvgwbS9/JqeW9yUJ6+2PdbZMGCvF4hr709WRpAoKP77HqRzfOYJSQDNtY6APS8nFfLiIfvDXEUZKDx5QqXdf8GlMrBEF+IVwJ758',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];