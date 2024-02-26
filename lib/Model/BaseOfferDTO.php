<?php
/**
 * BaseOfferDTO
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Партнерский API Маркета
 *
 * API Яндекс Маркета помогает продавцам автоматизировать и упростить работу с маркетплейсом.  В числе возможностей интеграции:  * управление каталогом товаров и витриной,  * обработка заказов,  * изменение настроек магазина,  * получение отчетов.
 *
 * The version of the OpenAPI document: LATEST
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * BaseOfferDTO Class Doc Comment
 *
 * @category Class
 * @description Основные параметры товара.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class BaseOfferDTO implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'BaseOfferDTO';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'offer_id' => 'string',
        'name' => 'string',
        'category' => 'string',
        'pictures' => 'string[]',
        'videos' => 'string[]',
        'vendor' => 'string',
        'barcodes' => 'string[]',
        'description' => 'string',
        'manufacturer_countries' => 'string[]',
        'weight_dimensions' => '\OpenAPI\Client\Model\OfferWeightDimensionsDTO',
        'vendor_code' => 'string',
        'tags' => 'string[]',
        'shelf_life' => '\OpenAPI\Client\Model\TimePeriodDTO',
        'life_time' => '\OpenAPI\Client\Model\TimePeriodDTO',
        'guarantee_period' => '\OpenAPI\Client\Model\TimePeriodDTO',
        'customs_commodity_code' => 'string',
        'certificates' => 'string[]',
        'box_count' => 'int',
        'condition' => '\OpenAPI\Client\Model\OfferConditionDTO',
        'type' => '\OpenAPI\Client\Model\OfferType',
        'downloadable' => 'bool',
        'adult' => 'bool',
        'age' => '\OpenAPI\Client\Model\AgeDTO',
        'params' => '\OpenAPI\Client\Model\OfferParamDTO[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'offer_id' => null,
        'name' => null,
        'category' => null,
        'pictures' => null,
        'videos' => null,
        'vendor' => null,
        'barcodes' => null,
        'description' => null,
        'manufacturer_countries' => null,
        'weight_dimensions' => null,
        'vendor_code' => null,
        'tags' => null,
        'shelf_life' => null,
        'life_time' => null,
        'guarantee_period' => null,
        'customs_commodity_code' => null,
        'certificates' => null,
        'box_count' => 'int32',
        'condition' => null,
        'type' => null,
        'downloadable' => null,
        'adult' => null,
        'age' => null,
        'params' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'offer_id' => false,
        'name' => false,
        'category' => false,
        'pictures' => false,
        'videos' => false,
        'vendor' => false,
        'barcodes' => false,
        'description' => false,
        'manufacturer_countries' => false,
        'weight_dimensions' => false,
        'vendor_code' => false,
        'tags' => false,
        'shelf_life' => false,
        'life_time' => false,
        'guarantee_period' => false,
        'customs_commodity_code' => false,
        'certificates' => false,
        'box_count' => false,
        'condition' => false,
        'type' => false,
        'downloadable' => false,
        'adult' => false,
        'age' => false,
        'params' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'offer_id' => 'offerId',
        'name' => 'name',
        'category' => 'category',
        'pictures' => 'pictures',
        'videos' => 'videos',
        'vendor' => 'vendor',
        'barcodes' => 'barcodes',
        'description' => 'description',
        'manufacturer_countries' => 'manufacturerCountries',
        'weight_dimensions' => 'weightDimensions',
        'vendor_code' => 'vendorCode',
        'tags' => 'tags',
        'shelf_life' => 'shelfLife',
        'life_time' => 'lifeTime',
        'guarantee_period' => 'guaranteePeriod',
        'customs_commodity_code' => 'customsCommodityCode',
        'certificates' => 'certificates',
        'box_count' => 'boxCount',
        'condition' => 'condition',
        'type' => 'type',
        'downloadable' => 'downloadable',
        'adult' => 'adult',
        'age' => 'age',
        'params' => 'params'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'offer_id' => 'setOfferId',
        'name' => 'setName',
        'category' => 'setCategory',
        'pictures' => 'setPictures',
        'videos' => 'setVideos',
        'vendor' => 'setVendor',
        'barcodes' => 'setBarcodes',
        'description' => 'setDescription',
        'manufacturer_countries' => 'setManufacturerCountries',
        'weight_dimensions' => 'setWeightDimensions',
        'vendor_code' => 'setVendorCode',
        'tags' => 'setTags',
        'shelf_life' => 'setShelfLife',
        'life_time' => 'setLifeTime',
        'guarantee_period' => 'setGuaranteePeriod',
        'customs_commodity_code' => 'setCustomsCommodityCode',
        'certificates' => 'setCertificates',
        'box_count' => 'setBoxCount',
        'condition' => 'setCondition',
        'type' => 'setType',
        'downloadable' => 'setDownloadable',
        'adult' => 'setAdult',
        'age' => 'setAge',
        'params' => 'setParams'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'offer_id' => 'getOfferId',
        'name' => 'getName',
        'category' => 'getCategory',
        'pictures' => 'getPictures',
        'videos' => 'getVideos',
        'vendor' => 'getVendor',
        'barcodes' => 'getBarcodes',
        'description' => 'getDescription',
        'manufacturer_countries' => 'getManufacturerCountries',
        'weight_dimensions' => 'getWeightDimensions',
        'vendor_code' => 'getVendorCode',
        'tags' => 'getTags',
        'shelf_life' => 'getShelfLife',
        'life_time' => 'getLifeTime',
        'guarantee_period' => 'getGuaranteePeriod',
        'customs_commodity_code' => 'getCustomsCommodityCode',
        'certificates' => 'getCertificates',
        'box_count' => 'getBoxCount',
        'condition' => 'getCondition',
        'type' => 'getType',
        'downloadable' => 'getDownloadable',
        'adult' => 'getAdult',
        'age' => 'getAge',
        'params' => 'getParams'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('offer_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('category', $data ?? [], null);
        $this->setIfExists('pictures', $data ?? [], null);
        $this->setIfExists('videos', $data ?? [], null);
        $this->setIfExists('vendor', $data ?? [], null);
        $this->setIfExists('barcodes', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('manufacturer_countries', $data ?? [], null);
        $this->setIfExists('weight_dimensions', $data ?? [], null);
        $this->setIfExists('vendor_code', $data ?? [], null);
        $this->setIfExists('tags', $data ?? [], null);
        $this->setIfExists('shelf_life', $data ?? [], null);
        $this->setIfExists('life_time', $data ?? [], null);
        $this->setIfExists('guarantee_period', $data ?? [], null);
        $this->setIfExists('customs_commodity_code', $data ?? [], null);
        $this->setIfExists('certificates', $data ?? [], null);
        $this->setIfExists('box_count', $data ?? [], null);
        $this->setIfExists('condition', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('downloadable', $data ?? [], null);
        $this->setIfExists('adult', $data ?? [], null);
        $this->setIfExists('age', $data ?? [], null);
        $this->setIfExists('params', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['offer_id'] === null) {
            $invalidProperties[] = "'offer_id' can't be null";
        }
        if ((mb_strlen($this->container['offer_id']) > 80)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be smaller than or equal to 80.";
        }

        if ((mb_strlen($this->container['offer_id']) < 1)) {
            $invalidProperties[] = "invalid value for 'offer_id', the character length must be bigger than or equal to 1.";
        }

        if (!preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", $this->container['offer_id'])) {
            $invalidProperties[] = "invalid value for 'offer_id', must be conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.";
        }

        if (!is_null($this->container['name']) && (mb_strlen($this->container['name']) > 256)) {
            $invalidProperties[] = "invalid value for 'name', the character length must be smaller than or equal to 256.";
        }

        if (!is_null($this->container['videos']) && (count($this->container['videos']) > 1)) {
            $invalidProperties[] = "invalid value for 'videos', number of items must be less than or equal to 1.";
        }

        if (!is_null($this->container['description']) && (mb_strlen($this->container['description']) > 6000)) {
            $invalidProperties[] = "invalid value for 'description', the character length must be smaller than or equal to 6000.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets offer_id
     *
     * @return string
     */
    public function getOfferId()
    {
        return $this->container['offer_id'];
    }

    /**
     * Sets offer_id
     *
     * @param string $offer_id Ваш SKU — идентификатор товара в вашей системе.  Разрешена любая последовательность длиной до 80 знаков. В нее могут входить английские и русские буквы, цифры и символы `. , / \\ ( ) [ ] - = _`  Правила использования SKU:  * У каждого товара SKU должен быть свой.  * SKU товара нельзя менять — можно только удалить товар и добавить заново с новым SKU.  * Уже заданный SKU нельзя освободить и использовать заново для другого товара. Каждый товар должен получать новый идентификатор, до того никогда не использовавшийся в вашем каталоге.  [Что такое SKU и как его назначать](https://yandex.ru/support/marketplace/assortment/add/index.html#fields)
     *
     * @return self
     */
    public function setOfferId($offer_id)
    {
        if (is_null($offer_id)) {
            throw new \InvalidArgumentException('non-nullable offer_id cannot be null');
        }
        if ((mb_strlen($offer_id) > 80)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling BaseOfferDTO., must be smaller than or equal to 80.');
        }
        if ((mb_strlen($offer_id) < 1)) {
            throw new \InvalidArgumentException('invalid length for $offer_id when calling BaseOfferDTO., must be bigger than or equal to 1.');
        }
        if ((!preg_match("/^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/", ObjectSerializer::toString($offer_id)))) {
            throw new \InvalidArgumentException("invalid value for \$offer_id when calling BaseOfferDTO., must conform to the pattern /^[0-9a-zа-яА-ЯA-ZёËëЁ.,\\\\\/()\\[\\]\\-=_]{1,80}$/.");
        }

        $this->container['offer_id'] = $offer_id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Составляйте название по схеме: тип + бренд или производитель + модель + особенности, если есть (например, цвет, размер или вес) и количество в упаковке.  Не включайте в название условия продажи (например, «скидка», «бесплатная доставка» и т. д.), эмоциональные характеристики («хит», «супер» и т. д.). Не пишите слова большими буквами — кроме устоявшихся названий брендов и моделей.  Оптимальная длина — 50–60 символов, максимальная — 256.  [Рекомендации и правила](https://yandex.ru/support/marketplace/assortment/fields/title.html)
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        if ((mb_strlen($name) > 256)) {
            throw new \InvalidArgumentException('invalid length for $name when calling BaseOfferDTO., must be smaller than or equal to 256.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets category
     *
     * @return string|null
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string|null $category Категория, к которой магазин относит свой товар. Она помогает точнее определить для товара категорию в каталоге Маркета.  Указывайте конкретные категории — например, набор ножей лучше отнести к категории **Столовые приборы**, а не просто **Посуда**.  Выбирайте категории, которые описывают товар, а не абстрактный признак — например, **Духи**, а не **Подарки**.
     *
     * @return self
     */
    public function setCategory($category)
    {
        if (is_null($category)) {
            throw new \InvalidArgumentException('non-nullable category cannot be null');
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets pictures
     *
     * @return string[]|null
     */
    public function getPictures()
    {
        return $this->container['pictures'];
    }

    /**
     * Sets pictures
     *
     * @param string[]|null $pictures Ссылки на изображения товара. Изображение по первой ссылке считается основным, остальные дополнительными.  **Требования к ссылкам**  * Ссылок может быть до 10. * Указывайте ссылку целиком, включая протокол http или https. * Максимальная длина — 512 символов. * Русские буквы в URL можно. * Можно использовать прямые ссылки на изображения и на Яндекс Диск. Ссылки на Яндекс Диске нужно копировать с помощью функции **Поделиться**. Относительные ссылки и ссылки на другие облачные хранилища — не работают.  ✅ `https://example-shop.ru/images/sku12345.jpg`  ✅ `https://yadi.sk/i/NaBoRsimVOLov`  ❌ `/images/sku12345.jpg`  ❌ `https://www.dropbox.com/s/818f/tovar.jpg`  Ссылки на изображение должны быть постоянными. Нельзя использовать динамические ссылки, меняющиеся от выгрузки к выгрузке.  Если нужно заменить изображение, выложите новое изображение по новой ссылке, а ссылку на старое удалите. Если просто заменить изображение по старой ссылке, оно не обновится.  [Требования к изображениям](https://yandex.ru/support/marketplace/assortment/fields/images.html)
     *
     * @return self
     */
    public function setPictures($pictures)
    {
        if (is_null($pictures)) {
            throw new \InvalidArgumentException('non-nullable pictures cannot be null');
        }
        $this->container['pictures'] = $pictures;

        return $this;
    }

    /**
     * Gets videos
     *
     * @return string[]|null
     */
    public function getVideos()
    {
        return $this->container['videos'];
    }

    /**
     * Sets videos
     *
     * @param string[]|null $videos Ссылка (URL) на видео товара.  {% note alert %}  Пока действует временное ограничение: ссылка может быть только одна.  {% endnote %}  **Требования к ссылке**  * Указывайте ссылку целиком, включая протокол http или https. * Максимальная длина — 512 символов. * Русские буквы в URL можно. * Можно использовать прямые ссылки на видео и на Яндекс Диск. Ссылки на Яндекс Диске нужно копировать с помощью функции **Поделиться**. Относительные ссылки и ссылки на другие облачные хранилища — не работают.  ✅ `https://example-shop.ru/video/sku12345.avi`  ✅ `https://yadi.sk/i/NaBoRsimVOLov`  ❌ `/video/sku12345.avi`  ❌ `https://www.dropbox.com/s/818f/super-tovar.avi`  Ссылки на видео должны быть постоянными. Нельзя использовать динамические ссылки, меняющиеся от выгрузки к выгрузке.  Если нужно заменить видео, выложите новое видео по новой ссылке, а ссылку на старое удалите. Если просто заменить видео по старой ссылке, оно не обновится.  [Требования к видео](https://yandex.ru/support/marketplace/assortment/fields/video.html)
     *
     * @return self
     */
    public function setVideos($videos)
    {
        if (is_null($videos)) {
            throw new \InvalidArgumentException('non-nullable videos cannot be null');
        }

        if ((count($videos) > 1)) {
            throw new \InvalidArgumentException('invalid value for $videos when calling BaseOfferDTO., number of items must be less than or equal to 1.');
        }
        $this->container['videos'] = $videos;

        return $this;
    }

    /**
     * Gets vendor
     *
     * @return string|null
     */
    public function getVendor()
    {
        return $this->container['vendor'];
    }

    /**
     * Sets vendor
     *
     * @param string|null $vendor Название бренда или производителя. Должно быть записано так, как его пишет сам бренд.
     *
     * @return self
     */
    public function setVendor($vendor)
    {
        if (is_null($vendor)) {
            throw new \InvalidArgumentException('non-nullable vendor cannot be null');
        }
        $this->container['vendor'] = $vendor;

        return $this;
    }

    /**
     * Gets barcodes
     *
     * @return string[]|null
     */
    public function getBarcodes()
    {
        return $this->container['barcodes'];
    }

    /**
     * Sets barcodes
     *
     * @param string[]|null $barcodes Указывайте в виде последовательности цифр. Подойдут коды EAN-13, EAN-8, UPC-A, UPC-E или Code 128.  Для книг указывайте ISBN.  Для товаров [определенных категорий и торговых марок](https://yastatic.net/s3/doc-binary/src/support/market/ru/yandex-market-list-for-gtin.xlsx) штрихкод должен быть действительным кодом GTIN. Обратите внимание: внутренние штрихкоды, начинающиеся на 2 или 02, и коды формата Code 128 не являются GTIN.  [Что такое GTIN](*gtin)
     *
     * @return self
     */
    public function setBarcodes($barcodes)
    {
        if (is_null($barcodes)) {
            throw new \InvalidArgumentException('non-nullable barcodes cannot be null');
        }
        $this->container['barcodes'] = $barcodes;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Подробное описание товара: например, его преимущества и особенности.  Не давайте в описании инструкций по установке и сборке. Не используйте слова «скидка», «распродажа», «дешевый», «подарок» (кроме подарочных категорий), «бесплатно», «акция», «специальная цена», «новинка», «new», «аналог», «заказ», «хит». Не указывайте никакой контактной информации и не давайте ссылок.  Можно использовать теги:  * \\<h>, \\<h1>, \\<h2> и так далее — для заголовков; * \\<br> и \\<p> — для переноса строки; * \\<ol> — для нумерованного списка; * \\<ul> — для маркированного списка; * \\<li> — для создания элементов списка (должен находиться внутри \\<ol> или \\<ul>); * \\<div> — поддерживается, но не влияет на отображение текста.  Оптимальная длина — 400–600 символов, максимальная — 6000.  [Рекомендации и правила](https://yandex.ru/support/marketplace/assortment/fields/description.html)
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        if ((mb_strlen($description) > 6000)) {
            throw new \InvalidArgumentException('invalid length for $description when calling BaseOfferDTO., must be smaller than or equal to 6000.');
        }

        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets manufacturer_countries
     *
     * @return string[]|null
     */
    public function getManufacturerCountries()
    {
        return $this->container['manufacturer_countries'];
    }

    /**
     * Sets manufacturer_countries
     *
     * @param string[]|null $manufacturer_countries Страна, где был произведен товар.  Записывайте названия стран так, как они записаны в [списке](https://yastatic.net/s3/doc-binary/src/support/market/ru/countries.xlsx).
     *
     * @return self
     */
    public function setManufacturerCountries($manufacturer_countries)
    {
        if (is_null($manufacturer_countries)) {
            throw new \InvalidArgumentException('non-nullable manufacturer_countries cannot be null');
        }
        $this->container['manufacturer_countries'] = $manufacturer_countries;

        return $this;
    }

    /**
     * Gets weight_dimensions
     *
     * @return \OpenAPI\Client\Model\OfferWeightDimensionsDTO|null
     */
    public function getWeightDimensions()
    {
        return $this->container['weight_dimensions'];
    }

    /**
     * Sets weight_dimensions
     *
     * @param \OpenAPI\Client\Model\OfferWeightDimensionsDTO|null $weight_dimensions weight_dimensions
     *
     * @return self
     */
    public function setWeightDimensions($weight_dimensions)
    {
        if (is_null($weight_dimensions)) {
            throw new \InvalidArgumentException('non-nullable weight_dimensions cannot be null');
        }
        $this->container['weight_dimensions'] = $weight_dimensions;

        return $this;
    }

    /**
     * Gets vendor_code
     *
     * @return string|null
     */
    public function getVendorCode()
    {
        return $this->container['vendor_code'];
    }

    /**
     * Sets vendor_code
     *
     * @param string|null $vendor_code Артикул товара от производителя.
     *
     * @return self
     */
    public function setVendorCode($vendor_code)
    {
        if (is_null($vendor_code)) {
            throw new \InvalidArgumentException('non-nullable vendor_code cannot be null');
        }
        $this->container['vendor_code'] = $vendor_code;

        return $this;
    }

    /**
     * Gets tags
     *
     * @return string[]|null
     */
    public function getTags()
    {
        return $this->container['tags'];
    }

    /**
     * Sets tags
     *
     * @param string[]|null $tags Метки товара, используемые магазином. Покупателям теги не видны. По тегам можно группировать и фильтровать разные товары в каталоге — например, товары одной серии, коллекции или линейки.  Максимальная длина тега 20 символов. У одного товара может быть максимум 10 тегов. Всего можно создать не больше 50 разных тегов.
     *
     * @return self
     */
    public function setTags($tags)
    {
        if (is_null($tags)) {
            throw new \InvalidArgumentException('non-nullable tags cannot be null');
        }
        $this->container['tags'] = $tags;

        return $this;
    }

    /**
     * Gets shelf_life
     *
     * @return \OpenAPI\Client\Model\TimePeriodDTO|null
     */
    public function getShelfLife()
    {
        return $this->container['shelf_life'];
    }

    /**
     * Sets shelf_life
     *
     * @param \OpenAPI\Client\Model\TimePeriodDTO|null $shelf_life shelf_life
     *
     * @return self
     */
    public function setShelfLife($shelf_life)
    {
        if (is_null($shelf_life)) {
            throw new \InvalidArgumentException('non-nullable shelf_life cannot be null');
        }
        $this->container['shelf_life'] = $shelf_life;

        return $this;
    }

    /**
     * Gets life_time
     *
     * @return \OpenAPI\Client\Model\TimePeriodDTO|null
     */
    public function getLifeTime()
    {
        return $this->container['life_time'];
    }

    /**
     * Sets life_time
     *
     * @param \OpenAPI\Client\Model\TimePeriodDTO|null $life_time life_time
     *
     * @return self
     */
    public function setLifeTime($life_time)
    {
        if (is_null($life_time)) {
            throw new \InvalidArgumentException('non-nullable life_time cannot be null');
        }
        $this->container['life_time'] = $life_time;

        return $this;
    }

    /**
     * Gets guarantee_period
     *
     * @return \OpenAPI\Client\Model\TimePeriodDTO|null
     */
    public function getGuaranteePeriod()
    {
        return $this->container['guarantee_period'];
    }

    /**
     * Sets guarantee_period
     *
     * @param \OpenAPI\Client\Model\TimePeriodDTO|null $guarantee_period guarantee_period
     *
     * @return self
     */
    public function setGuaranteePeriod($guarantee_period)
    {
        if (is_null($guarantee_period)) {
            throw new \InvalidArgumentException('non-nullable guarantee_period cannot be null');
        }
        $this->container['guarantee_period'] = $guarantee_period;

        return $this;
    }

    /**
     * Gets customs_commodity_code
     *
     * @return string|null
     */
    public function getCustomsCommodityCode()
    {
        return $this->container['customs_commodity_code'];
    }

    /**
     * Sets customs_commodity_code
     *
     * @param string|null $customs_commodity_code Код товара в единой Товарной номенклатуре внешнеэкономической деятельности (ТН ВЭД) — 10 или 14 цифр без пробелов.  Обязательно укажите, если он есть.
     *
     * @return self
     */
    public function setCustomsCommodityCode($customs_commodity_code)
    {
        if (is_null($customs_commodity_code)) {
            throw new \InvalidArgumentException('non-nullable customs_commodity_code cannot be null');
        }
        $this->container['customs_commodity_code'] = $customs_commodity_code;

        return $this;
    }

    /**
     * Gets certificates
     *
     * @return string[]|null
     */
    public function getCertificates()
    {
        return $this->container['certificates'];
    }

    /**
     * Sets certificates
     *
     * @param string[]|null $certificates Номера документов на товар: сертификата, декларации соответствия и т. п.  Передавать можно только номера документов, сканы которого загружены в личном кабинете продавца по [инструкции](https://yandex.ru/support/marketplace/assortment/restrictions/certificates.html).
     *
     * @return self
     */
    public function setCertificates($certificates)
    {
        if (is_null($certificates)) {
            throw new \InvalidArgumentException('non-nullable certificates cannot be null');
        }
        $this->container['certificates'] = $certificates;

        return $this;
    }

    /**
     * Gets box_count
     *
     * @return int|null
     */
    public function getBoxCount()
    {
        return $this->container['box_count'];
    }

    /**
     * Sets box_count
     *
     * @param int|null $box_count Количество грузовых мест.  Параметр используется, если товар представляет собой несколько коробок, упаковок и так далее. Например, кондиционер занимает два места — внешний и внутренний блоки в двух коробках.  Для товаров, занимающих одно место, не передавайте этот параметр.
     *
     * @return self
     */
    public function setBoxCount($box_count)
    {
        if (is_null($box_count)) {
            throw new \InvalidArgumentException('non-nullable box_count cannot be null');
        }
        $this->container['box_count'] = $box_count;

        return $this;
    }

    /**
     * Gets condition
     *
     * @return \OpenAPI\Client\Model\OfferConditionDTO|null
     */
    public function getCondition()
    {
        return $this->container['condition'];
    }

    /**
     * Sets condition
     *
     * @param \OpenAPI\Client\Model\OfferConditionDTO|null $condition condition
     *
     * @return self
     */
    public function setCondition($condition)
    {
        if (is_null($condition)) {
            throw new \InvalidArgumentException('non-nullable condition cannot be null');
        }
        $this->container['condition'] = $condition;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \OpenAPI\Client\Model\OfferType|null
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \OpenAPI\Client\Model\OfferType|null $type type
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets downloadable
     *
     * @return bool|null
     */
    public function getDownloadable()
    {
        return $this->container['downloadable'];
    }

    /**
     * Sets downloadable
     *
     * @param bool|null $downloadable Признак цифрового товара. Укажите `true`, если товар доставляется по электронной почте.  [Как работать с цифровыми товарами](../../step-by-step/digital.md)
     *
     * @return self
     */
    public function setDownloadable($downloadable)
    {
        if (is_null($downloadable)) {
            throw new \InvalidArgumentException('non-nullable downloadable cannot be null');
        }
        $this->container['downloadable'] = $downloadable;

        return $this;
    }

    /**
     * Gets adult
     *
     * @return bool|null
     */
    public function getAdult()
    {
        return $this->container['adult'];
    }

    /**
     * Sets adult
     *
     * @param bool|null $adult Параметр включает для товара пометку 18+. Устанавливайте ее только для товаров, которые относятся к удовлетворению сексуальных потребностей.
     *
     * @return self
     */
    public function setAdult($adult)
    {
        if (is_null($adult)) {
            throw new \InvalidArgumentException('non-nullable adult cannot be null');
        }
        $this->container['adult'] = $adult;

        return $this;
    }

    /**
     * Gets age
     *
     * @return \OpenAPI\Client\Model\AgeDTO|null
     */
    public function getAge()
    {
        return $this->container['age'];
    }

    /**
     * Sets age
     *
     * @param \OpenAPI\Client\Model\AgeDTO|null $age age
     *
     * @return self
     */
    public function setAge($age)
    {
        if (is_null($age)) {
            throw new \InvalidArgumentException('non-nullable age cannot be null');
        }
        $this->container['age'] = $age;

        return $this;
    }

    /**
     * Gets params
     *
     * @return \OpenAPI\Client\Model\OfferParamDTO[]|null
     */
    public function getParams()
    {
        return $this->container['params'];
    }

    /**
     * Sets params
     *
     * @param \OpenAPI\Client\Model\OfferParamDTO[]|null $params Характеристики, которые есть только у товаров конкретной категории — например, диаметр колес велосипеда или материал подошвы обуви.
     *
     * @return self
     */
    public function setParams($params)
    {
        if (is_null($params)) {
            throw new \InvalidArgumentException('non-nullable params cannot be null');
        }
        $this->container['params'] = $params;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


