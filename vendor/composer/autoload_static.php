<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitd086978d92d734dbe94c03fa3fbf93ff
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'chillerlan\\Traits\\' => 18,
            'chillerlan\\QRCode\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'chillerlan\\Traits\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-traits/src',
        ),
        'chillerlan\\QRCode\\' => 
        array (
            0 => __DIR__ . '/..' . '/chillerlan/php-qrcode/src',
        ),
    );

    public static $classMap = array (
        'chillerlan\\QRCode\\Data\\AlphaNum' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/AlphaNum.php',
        'chillerlan\\QRCode\\Data\\Byte' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/Byte.php',
        'chillerlan\\QRCode\\Data\\Kanji' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/Kanji.php',
        'chillerlan\\QRCode\\Data\\MaskPatternTester' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/MaskPatternTester.php',
        'chillerlan\\QRCode\\Data\\Number' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/Number.php',
        'chillerlan\\QRCode\\Data\\QRCodeDataException' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/QRCodeDataException.php',
        'chillerlan\\QRCode\\Data\\QRDataAbstract' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/QRDataAbstract.php',
        'chillerlan\\QRCode\\Data\\QRDataInterface' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/QRDataInterface.php',
        'chillerlan\\QRCode\\Data\\QRMatrix' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Data/QRMatrix.php',
        'chillerlan\\QRCode\\Helpers\\BitBuffer' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Helpers/BitBuffer.php',
        'chillerlan\\QRCode\\Helpers\\Polynomial' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Helpers/Polynomial.php',
        'chillerlan\\QRCode\\Output\\QRCodeOutputException' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QRCodeOutputException.php',
        'chillerlan\\QRCode\\Output\\QRImage' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QRImage.php',
        'chillerlan\\QRCode\\Output\\QRMarkup' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QRMarkup.php',
        'chillerlan\\QRCode\\Output\\QROutputAbstract' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QROutputAbstract.php',
        'chillerlan\\QRCode\\Output\\QROutputInterface' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QROutputInterface.php',
        'chillerlan\\QRCode\\Output\\QRString' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Output/QRString.php',
        'chillerlan\\QRCode\\QRCode' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/QRCode.php',
        'chillerlan\\QRCode\\QRCodeException' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/QRCodeException.php',
        'chillerlan\\QRCode\\QROptions' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/QROptions.php',
        'chillerlan\\QRCode\\QROptionsTrait' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/QROptionsTrait.php',
        'chillerlan\\QRCode\\Traits\\QRAuthenticator' => __DIR__ . '/..' . '/chillerlan/php-qrcode/src/Traits/QRAuthenticator.php',
        'chillerlan\\Traits\\ArrayHelpers\\ByteArray' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ArrayHelpers/ByteArray.php',
        'chillerlan\\Traits\\ArrayHelpers\\ByteArrayDispenser' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ArrayHelpers/ByteArrayDispenser.php',
        'chillerlan\\Traits\\ArrayHelpers\\DotArray' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ArrayHelpers/DotArray.php',
        'chillerlan\\Traits\\ArrayHelpers\\SearchableArray' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ArrayHelpers/SearchableArray.php',
        'chillerlan\\Traits\\ClassLoader' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ClassLoader.php',
        'chillerlan\\Traits\\Container' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Container.php',
        'chillerlan\\Traits\\ContainerAbstract' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ContainerAbstract.php',
        'chillerlan\\Traits\\ContainerInterface' => __DIR__ . '/..' . '/chillerlan/php-traits/src/ContainerInterface.php',
        'chillerlan\\Traits\\Crypto\\Box' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/Box.php',
        'chillerlan\\Traits\\Crypto\\BoxKeypair' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/BoxKeypair.php',
        'chillerlan\\Traits\\Crypto\\CryptoBox' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoBox.php',
        'chillerlan\\Traits\\Crypto\\CryptoBoxInterface' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoBoxInterface.php',
        'chillerlan\\Traits\\Crypto\\CryptoException' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoException.php',
        'chillerlan\\Traits\\Crypto\\CryptoKeyInterface' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoKeyInterface.php',
        'chillerlan\\Traits\\Crypto\\CryptoKeypair' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoKeypair.php',
        'chillerlan\\Traits\\Crypto\\CryptoTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/CryptoTrait.php',
        'chillerlan\\Traits\\Crypto\\MemzeroDestructorTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/MemzeroDestructorTrait.php',
        'chillerlan\\Traits\\Crypto\\SealedBox' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/SealedBox.php',
        'chillerlan\\Traits\\Crypto\\SecretBox' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/SecretBox.php',
        'chillerlan\\Traits\\Crypto\\SignKeypair' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/SignKeypair.php',
        'chillerlan\\Traits\\Crypto\\SignedMessage' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Crypto/SignedMessage.php',
        'chillerlan\\Traits\\DotEnv' => __DIR__ . '/..' . '/chillerlan/php-traits/src/DotEnv.php',
        'chillerlan\\Traits\\Enumerable' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Enumerable.php',
        'chillerlan\\Traits\\EnumerableInterface' => __DIR__ . '/..' . '/chillerlan/php-traits/src/EnumerableInterface.php',
        'chillerlan\\Traits\\Env' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Env.php',
        'chillerlan\\Traits\\Interfaces\\ArrayAccessTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Interfaces/ArrayAccessTrait.php',
        'chillerlan\\Traits\\Interfaces\\IteratorTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Interfaces/IteratorTrait.php',
        'chillerlan\\Traits\\Interfaces\\SerializableTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Interfaces/SerializableTrait.php',
        'chillerlan\\Traits\\Magic' => __DIR__ . '/..' . '/chillerlan/php-traits/src/Magic.php',
        'chillerlan\\Traits\\SPL\\CountableTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/SPL/CountableTrait.php',
        'chillerlan\\Traits\\SPL\\SeekableIteratorTrait' => __DIR__ . '/..' . '/chillerlan/php-traits/src/SPL/SeekableIteratorTrait.php',
        'chillerlan\\Traits\\TraitException' => __DIR__ . '/..' . '/chillerlan/php-traits/src/TraitException.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitd086978d92d734dbe94c03fa3fbf93ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitd086978d92d734dbe94c03fa3fbf93ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitd086978d92d734dbe94c03fa3fbf93ff::$classMap;

        }, null, ClassLoader::class);
    }
}
