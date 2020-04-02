<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/monitoring/v3/service_service.proto

namespace GPBMetadata\Google\Monitoring\V3;

class ServiceService
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Annotations::initOnce();
        \GPBMetadata\Google\Api\Client::initOnce();
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        \GPBMetadata\Google\Monitoring\V3\Service::initOnce();
        \GPBMetadata\Google\Protobuf\GPBEmpty::initOnce();
        \GPBMetadata\Google\Protobuf\FieldMask::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ad0200a2a676f6f676c652f6d6f6e69746f72696e672f76332f73657276" .
            "6963655f736572766963652e70726f746f1214676f6f676c652e6d6f6e69" .
            "746f72696e672e76331a17676f6f676c652f6170692f636c69656e742e70" .
            "726f746f1a1f676f6f676c652f6170692f6669656c645f6265686176696f" .
            "722e70726f746f1a19676f6f676c652f6170692f7265736f757263652e70" .
            "726f746f1a22676f6f676c652f6d6f6e69746f72696e672f76332f736572" .
            "766963652e70726f746f1a1b676f6f676c652f70726f746f6275662f656d" .
            "7074792e70726f746f1a20676f6f676c652f70726f746f6275662f666965" .
            "6c645f6d61736b2e70726f746f229a010a14437265617465536572766963" .
            "655265717565737412390a06706172656e741801200128094229e04102fa" .
            "412312216d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f" .
            "5365727669636512120a0a736572766963655f696418032001280912330a" .
            "077365727669636518022001280b321d2e676f6f676c652e6d6f6e69746f" .
            "72696e672e76332e536572766963654203e04102224c0a11476574536572" .
            "766963655265717565737412370a046e616d651801200128094229e04102" .
            "fa41230a216d6f6e69746f72696e672e676f6f676c65617069732e636f6d" .
            "2f536572766963652287010a134c69737453657276696365735265717565" .
            "737412390a06706172656e741801200128094229e04102fa412312216d6f" .
            "6e69746f72696e672e676f6f676c65617069732e636f6d2f536572766963" .
            "65120e0a0666696c74657218022001280912110a09706167655f73697a65" .
            "18032001280512120a0a706167655f746f6b656e18042001280922600a14" .
            "4c6973745365727669636573526573706f6e7365122f0a08736572766963" .
            "657318012003280b321d2e676f6f676c652e6d6f6e69746f72696e672e76" .
            "332e5365727669636512170a0f6e6578745f706167655f746f6b656e1802" .
            "20012809227c0a1455706461746553657276696365526571756573741233" .
            "0a077365727669636518012001280b321d2e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76332e536572766963654203e04102122f0a0b7570646174" .
            "655f6d61736b18022001280b321a2e676f6f676c652e70726f746f627566" .
            "2e4669656c644d61736b224f0a1444656c65746553657276696365526571" .
            "7565737412370a046e616d651801200128094229e04102fa41230a216d6f" .
            "6e69746f72696e672e676f6f676c65617069732e636f6d2f536572766963" .
            "6522d6010a22437265617465536572766963654c6576656c4f626a656374" .
            "6976655265717565737412390a06706172656e741801200128094229e041" .
            "02fa41230a216d6f6e69746f72696e672e676f6f676c65617069732e636f" .
            "6d2f5365727669636512220a1a736572766963655f6c6576656c5f6f626a" .
            "6563746976655f696418032001280912510a17736572766963655f6c6576" .
            "656c5f6f626a65637469766518022001280b322b2e676f6f676c652e6d6f" .
            "6e69746f72696e672e76332e536572766963654c6576656c4f626a656374" .
            "6976654203e0410222a8010a1f476574536572766963654c6576656c4f62" .
            "6a6563746976655265717565737412450a046e616d651801200128094237" .
            "e04102fa41310a2f6d6f6e69746f72696e672e676f6f676c65617069732e" .
            "636f6d2f536572766963654c6576656c4f626a656374697665123e0a0476" .
            "69657718022001280e32302e676f6f676c652e6d6f6e69746f72696e672e" .
            "76332e536572766963654c6576656c4f626a6563746976652e5669657722" .
            "d5010a214c697374536572766963654c6576656c4f626a65637469766573" .
            "5265717565737412390a06706172656e741801200128094229e04102fa41" .
            "230a216d6f6e69746f72696e672e676f6f676c65617069732e636f6d2f53" .
            "657276696365120e0a0666696c74657218022001280912110a0970616765" .
            "5f73697a6518032001280512120a0a706167655f746f6b656e1804200128" .
            "09123e0a047669657718052001280e32302e676f6f676c652e6d6f6e6974" .
            "6f72696e672e76332e536572766963654c6576656c4f626a656374697665" .
            "2e56696577228c010a224c697374536572766963654c6576656c4f626a65" .
            "637469766573526573706f6e7365124d0a18736572766963655f6c657665" .
            "6c5f6f626a6563746976657318012003280b322b2e676f6f676c652e6d6f" .
            "6e69746f72696e672e76332e536572766963654c6576656c4f626a656374" .
            "69766512170a0f6e6578745f706167655f746f6b656e18022001280922a8" .
            "010a22557064617465536572766963654c6576656c4f626a656374697665" .
            "5265717565737412510a17736572766963655f6c6576656c5f6f626a6563" .
            "7469766518012001280b322b2e676f6f676c652e6d6f6e69746f72696e67" .
            "2e76332e536572766963654c6576656c4f626a6563746976654203e04102" .
            "122f0a0b7570646174655f6d61736b18022001280b321a2e676f6f676c65" .
            "2e70726f746f6275662e4669656c644d61736b226b0a2244656c65746553" .
            "6572766963654c6576656c4f626a6563746976655265717565737412450a" .
            "046e616d651801200128094237e04102fa41310a2f6d6f6e69746f72696e" .
            "672e676f6f676c65617069732e636f6d2f536572766963654c6576656c4f" .
            "626a65637469766532ea0f0a18536572766963654d6f6e69746f72696e67" .
            "536572766963651297010a0d43726561746553657276696365122a2e676f" .
            "6f676c652e6d6f6e69746f72696e672e76332e4372656174655365727669" .
            "6365526571756573741a1d2e676f6f676c652e6d6f6e69746f72696e672e" .
            "76332e53657276696365223b82d3e493022422192f76332f7b706172656e" .
            "743d2a2f2a7d2f73657276696365733a0773657276696365da410e706172" .
            "656e742c73657276696365127e0a0a4765745365727669636512272e676f" .
            "6f676c652e6d6f6e69746f72696e672e76332e4765745365727669636552" .
            "6571756573741a1d2e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "53657276696365222882d3e493021b12192f76332f7b6e616d653d2a2f2a" .
            "2f73657276696365732f2a7dda41046e616d651291010a0c4c6973745365" .
            "72766963657312292e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "4c6973745365727669636573526571756573741a2a2e676f6f676c652e6d" .
            "6f6e69746f72696e672e76332e4c6973745365727669636573526573706f" .
            "6e7365222a82d3e493021b12192f76332f7b706172656e743d2a2f2a7d2f" .
            "7365727669636573da4106706172656e741298010a0d5570646174655365" .
            "7276696365122a2e676f6f676c652e6d6f6e69746f72696e672e76332e55" .
            "706461746553657276696365526571756573741a1d2e676f6f676c652e6d" .
            "6f6e69746f72696e672e76332e53657276696365223c82d3e493022c3221" .
            "2f76332f7b736572766963652e6e616d653d2a2f2a2f7365727669636573" .
            "2f2a7d3a0773657276696365da410773657276696365127d0a0d44656c65" .
            "746553657276696365122a2e676f6f676c652e6d6f6e69746f72696e672e" .
            "76332e44656c65746553657276696365526571756573741a162e676f6f67" .
            "6c652e70726f746f6275662e456d707479222882d3e493021b2a192f7633" .
            "2f7b6e616d653d2a2f2a2f73657276696365732f2a7dda41046e616d6512" .
            "fa010a1b437265617465536572766963654c6576656c4f626a6563746976" .
            "6512382e676f6f676c652e6d6f6e69746f72696e672e76332e4372656174" .
            "65536572766963654c6576656c4f626a656374697665526571756573741a" .
            "2b2e676f6f676c652e6d6f6e69746f72696e672e76332e53657276696365" .
            "4c6576656c4f626a656374697665227482d3e493024d22322f76332f7b70" .
            "6172656e743d2a2f2a2f73657276696365732f2a7d2f736572766963654c" .
            "6576656c4f626a656374697665733a17736572766963655f6c6576656c5f" .
            "6f626a656374697665da411e706172656e742c736572766963655f6c6576" .
            "656c5f6f626a65637469766512c1010a18476574536572766963654c6576" .
            "656c4f626a65637469766512352e676f6f676c652e6d6f6e69746f72696e" .
            "672e76332e476574536572766963654c6576656c4f626a65637469766552" .
            "6571756573741a2b2e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "536572766963654c6576656c4f626a656374697665224182d3e493023412" .
            "322f76332f7b6e616d653d2a2f2a2f73657276696365732f2a2f73657276" .
            "6963654c6576656c4f626a656374697665732f2a7dda41046e616d6512d4" .
            "010a1a4c697374536572766963654c6576656c4f626a6563746976657312" .
            "372e676f6f676c652e6d6f6e69746f72696e672e76332e4c697374536572" .
            "766963654c6576656c4f626a65637469766573526571756573741a382e67" .
            "6f6f676c652e6d6f6e69746f72696e672e76332e4c697374536572766963" .
            "654c6576656c4f626a65637469766573526573706f6e7365224382d3e493" .
            "023412322f76332f7b706172656e743d2a2f2a2f73657276696365732f2a" .
            "7d2f736572766963654c6576656c4f626a65637469766573da4106706172" .
            "656e74128c020a1b557064617465536572766963654c6576656c4f626a65" .
            "637469766512382e676f6f676c652e6d6f6e69746f72696e672e76332e55" .
            "7064617465536572766963654c6576656c4f626a65637469766552657175" .
            "6573741a2b2e676f6f676c652e6d6f6e69746f72696e672e76332e536572" .
            "766963654c6576656c4f626a65637469766522850182d3e4930265324a2f" .
            "76332f7b736572766963655f6c6576656c5f6f626a6563746976652e6e61" .
            "6d653d2a2f2a2f73657276696365732f2a2f736572766963654c6576656c" .
            "4f626a656374697665732f2a7d3a17736572766963655f6c6576656c5f6f" .
            "626a656374697665da4117736572766963655f6c6576656c5f6f626a6563" .
            "7469766512b2010a1b44656c657465536572766963654c6576656c4f626a" .
            "65637469766512382e676f6f676c652e6d6f6e69746f72696e672e76332e" .
            "44656c657465536572766963654c6576656c4f626a656374697665526571" .
            "756573741a162e676f6f676c652e70726f746f6275662e456d7074792241" .
            "82d3e49302342a322f76332f7b6e616d653d2a2f2a2f7365727669636573" .
            "2f2a2f736572766963654c6576656c4f626a656374697665732f2a7dda41" .
            "046e616d651aa901ca41196d6f6e69746f72696e672e676f6f676c656170" .
            "69732e636f6dd241890168747470733a2f2f7777772e676f6f676c656170" .
            "69732e636f6d2f617574682f636c6f75642d706c6174666f726d2c687474" .
            "70733a2f2f7777772e676f6f676c65617069732e636f6d2f617574682f6d" .
            "6f6e69746f72696e672c68747470733a2f2f7777772e676f6f676c656170" .
            "69732e636f6d2f617574682f6d6f6e69746f72696e672e7265616442b501" .
            "0a18636f6d2e676f6f676c652e6d6f6e69746f72696e672e7633421d5365" .
            "72766963654d6f6e69746f72696e675365727669636550726f746f50015a" .
            "3e676f6f676c652e676f6c616e672e6f72672f67656e70726f746f2f676f" .
            "6f676c65617069732f6d6f6e69746f72696e672f76333b6d6f6e69746f72" .
            "696e67aa021a476f6f676c652e436c6f75642e4d6f6e69746f72696e672e" .
            "5633ca021a476f6f676c655c436c6f75645c4d6f6e69746f72696e675c56" .
            "33620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
