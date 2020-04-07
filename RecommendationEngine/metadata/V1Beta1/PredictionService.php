<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommendationengine/v1beta1/prediction_service.proto

namespace GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1;

class PredictionService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Cloud\Recommendationengine\V1Beta1\UserEvent::initOnce();
        \GPBMetadata\Google\Protobuf\Struct::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae40f0a42676f6f676c652f636c6f75642f7265636f6d6d656e64617469" .
            "6f6e656e67696e652f763162657461312f70726564696374696f6e5f7365" .
            "72766963652e70726f746f1229676f6f676c652e636c6f75642e7265636f" .
            "6d6d656e646174696f6e656e67696e652e763162657461311a1f676f6f67" .
            "6c652f6170692f6669656c645f6265686176696f722e70726f746f1a3a67" .
            "6f6f676c652f636c6f75642f7265636f6d6d656e646174696f6e656e6769" .
            "6e652f763162657461312f757365725f6576656e742e70726f746f1a1c67" .
            "6f6f676c652f70726f746f6275662f7374727563742e70726f746f1a1767" .
            "6f6f676c652f6170692f636c69656e742e70726f746f22fc030a0e507265" .
            "646963745265717565737412110a046e616d651801200128094203e04102" .
            "124d0a0a757365725f6576656e7418022001280b32342e676f6f676c652e" .
            "636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e763162" .
            "657461312e557365724576656e744203e0410212160a09706167655f7369" .
            "7a651807200128054203e0410112170a0a706167655f746f6b656e180820" .
            "0128094203e0410112130a0666696c7465721803200128094203e0410112" .
            "140a076472795f72756e1804200128084203e04101125a0a06706172616d" .
            "7318062003280b32452e676f6f676c652e636c6f75642e7265636f6d6d65" .
            "6e646174696f6e656e67696e652e763162657461312e5072656469637452" .
            "6571756573742e506172616d73456e7472794203e04101125a0a066c6162" .
            "656c7318092003280b32452e676f6f676c652e636c6f75642e7265636f6d" .
            "6d656e646174696f6e656e67696e652e763162657461312e507265646963" .
            "74526571756573742e4c6162656c73456e7472794203e041011a450a0b50" .
            "6172616d73456e747279120b0a036b657918012001280912250a0576616c" .
            "756518022001280b32162e676f6f676c652e70726f746f6275662e56616c" .
            "75653a0238011a2d0a0b4c6162656c73456e747279120b0a036b65791801" .
            "20012809120d0a0576616c75651802200128093a02380122e2040a0f5072" .
            "6564696374526573706f6e7365125c0a07726573756c747318012003280b" .
            "324b2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e" .
            "656e67696e652e763162657461312e50726564696374526573706f6e7365" .
            "2e50726564696374696f6e526573756c74121c0a147265636f6d6d656e64" .
            "6174696f6e5f746f6b656e18022001280912200a186974656d735f6d6973" .
            "73696e675f696e5f636174616c6f67180320032809120f0a076472795f72" .
            "756e180420012808125a0a086d6574616461746118052003280b32482e67" .
            "6f6f676c652e636c6f75642e7265636f6d6d656e646174696f6e656e6769" .
            "6e652e763162657461312e50726564696374526573706f6e73652e4d6574" .
            "6164617461456e74727912170a0f6e6578745f706167655f746f6b656e18" .
            "06200128091ae1010a1050726564696374696f6e526573756c74120a0a02" .
            "696418012001280912740a0d6974656d5f6d657461646174611802200328" .
            "0b325d2e676f6f676c652e636c6f75642e7265636f6d6d656e646174696f" .
            "6e656e67696e652e763162657461312e50726564696374526573706f6e73" .
            "652e50726564696374696f6e526573756c742e4974656d4d657461646174" .
            "61456e7472791a4b0a114974656d4d65746164617461456e747279120b0a" .
            "036b657918012001280912250a0576616c756518022001280b32162e676f" .
            "6f676c652e70726f746f6275662e56616c75653a0238011a470a0d4d6574" .
            "6164617461456e747279120b0a036b657918012001280912250a0576616c" .
            "756518022001280b32162e676f6f676c652e70726f746f6275662e56616c" .
            "75653a02380132d0020a1150726564696374696f6e5365727669636512e1" .
            "010a075072656469637412392e676f6f676c652e636c6f75642e7265636f" .
            "6d6d656e646174696f6e656e67696e652e763162657461312e5072656469" .
            "6374526571756573741a3a2e676f6f676c652e636c6f75642e7265636f6d" .
            "6d656e646174696f6e656e67696e652e763162657461312e507265646963" .
            "74526573706f6e7365225f82d3e493025922542f763162657461312f7b6e" .
            "616d653d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f636174" .
            "616c6f67732f2a2f6576656e7453746f7265732f2a2f706c6163656d656e" .
            "74732f2a7d3a707265646963743a012a1a57ca41237265636f6d6d656e64" .
            "6174696f6e656e67696e652e676f6f676c65617069732e636f6dd2412e68" .
            "747470733a2f2f7777772e676f6f676c65617069732e636f6d2f61757468" .
            "2f636c6f75642d706c6174666f726d429f020a2d636f6d2e676f6f676c65" .
            "2e636c6f75642e7265636f6d6d656e646174696f6e656e67696e652e7631" .
            "626574613150015a5d676f6f676c652e676f6c616e672e6f72672f67656e" .
            "70726f746f2f676f6f676c65617069732f636c6f75642f7265636f6d6d65" .
            "6e646174696f6e656e67696e652f763162657461313b7265636f6d6d656e" .
            "646174696f6e656e67696e65a202055245434149aa0229476f6f676c652e" .
            "436c6f75642e5265636f6d6d656e646174696f6e456e67696e652e563142" .
            "65746131ca0229476f6f676c655c436c6f75645c5265636f6d6d656e6461" .
            "74696f6e456e67696e655c56316265746131ea022c476f6f676c653a3a43" .
            "6c6f75643a3a5265636f6d6d656e646174696f6e456e67696e653a3a5631" .
            "6265746131620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
