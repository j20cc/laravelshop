<?php

return [
    'alipay' => [
        'app_id' => '2016081600259828',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAs5YOVM0IsGqSaG7BS8/o+oXWcwblqy45Ro/YGDCE2z4JAWDhhi+PCxI8I6xZgZ/b5g4FZDLQRoqnlwGd5hSvqJU3JXpWiM8BGS7UL1KVm6qRlnts/BbEjim1+GES1ib8J7AWpRp/7Brgyk6SMcH/LXCVbR8kZYQLOAPqIpNdacyBNJEiNWjOUeSXXgqEfvfe2uQzlqcDl8yrQd6FlSjDG8SCSF4irg8BHyB6bmxKgapGZaBNJjmASlW7QasYk9ZMOeSLA4Kkwu7L3qWpEzt8RYuxDcmRqeJNaCkebVd6K56OAtU+m8hSK/ZaCPKvFeouKhUfrVLA0iUBUFfHhJlB6QIDAQAB',
        'private_key' => 'MIIEpAIBAAKCAQEA7H3yPJbZy9Z27Adp3EaoGHmj+9Pv8xq+NDJBBLfF5YFSdgJWtKxdlfQQfL1ECFmBisob/71qXVWSZX8Fe8jv3h7GeOeFjlE/vJncTWMZnqR/OMJ4YwoKtvrqxtpX/jhFjAxlM55GC9CG15aDWGyTJvIF882w/TOYZqBNb3kTd9jDRL4LDh0NrYXUft1+lwlFl/zgvOQK/mRxz5wILlUVyb3D15VnC62k/xYU14vI7GDoLEztMKb6bukzcJGJSPt8ClmQOlcoJD5bCGYpygdLFHYAC0lIUWoFzNXeL7Bz+FrT8PyxK2T8Q5mPxncWY/2gTc4876aGFeXaEpdj8CPRHQIDAQABAoIBAQCqBsr4AMTJpoGNpK7ZbftAzYO2dGOZduq1AER6rd2b6eRtb7UC5MHMI9MOu8yD7EYUkMackYQ9Yl6EllRM8ORz39B18I63CXc3k68t/EfZJQ9KsZZ4LioR8EiHe0e0QKTP0cGY4PwfVmb77Py1wCnz4CGjbYkIIeY6Mpo5wOTcThwJNoPUP6AQED13qUNT+93nTp9c8FIl8XuluNbV5VSILskt+uavFvSyUIOOZdLHZFeQb20p54zlrDavDudm87g0FBJ+8zc4rRB9LBDrIhfpybh6ppw2X37MkOjqDSooCbjHwXCAUFu/NMDBeM4VIlB+cUHsVTHl4QHhCeesu2sJAoGBAPp8rGNpzBPiAA1p4+abdI6tgq5zYybjZsjcQt83WdB3wCXiEiZqIY3y3pDDw7oRpMWuxWRs56qS17o+wDHjEE20rxDTm8xK39P2TzXlMAEQnI3bIj6/p8OxY/IxSHwgFrPJS3wa8T6bPphOrvR/ZAJuT+A/tCviuM/qkHkdhQrHAoGBAPGya5Q4NclX/XN/pVSrfVHlZl9igjX4kXzhi+ysohakIg4pIJqw9/CH0JoAJj20Fo8mRHKZ18SJJCaU8VRS3/Bdcd68qhdb8s2lbyS1uBNILczKIidZQWYbZzMZDMmfrMZbxft5Wd4mfTIiTz8wXm4GQVLo6a4EWRUOFxqve8D7AoGANvcWqPX1R0OneUoMLXVdXVWrwHYngsgRrO/QaMTvm3Q7oNR74RwW4twxhJjAoVrvykUwoXnYWDDCz+anLAtEb5i/dbTJkkm31f5NoWj6YLFxeRtl51kNCj8pzGKOIla0RJ1eSAxtdayBTtCtSY+OtY3ZTz8LXTnyDgXN0BXvNM8CgYA/P4+DZAo/PDVpChg7xfyvd7aIc4DbmsaHxYYWUz6/agg3aG/Ny022tfPSuQNI1l2o7DyxOK0ME09QgV190Yoknm9z+C8Smc86HXauRpd7BEJn+uVhIqxIihdBeeasxIo0BkQTALiRt8S/X9cZFBFB/YUOq0CrdxvQtLU7GHzsDQKBgQDAc9CT3WLDhBG18DQpEO81x2wSodEUOfty7qK9PUfwVLrqgInd9JEMadYcKcpdC61n2awZBRfz4BlSwa8qG6IOy+xpA/VS8zrrg3lFhlWquai95AFm4gev1J7ArXHenWwaPe4XW65/1lNGBPAXe6jUVwqE/E8lbELmyrnl2IOcyA==',
        'log' => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id' => '',
        'mch_id' => '',
        'key' => '',
        'cert_client' => '',
        'cert_key' => '',
        'log' => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];
