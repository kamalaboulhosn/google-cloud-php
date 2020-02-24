<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/recommender/v1/recommender_service.proto

namespace GPBMetadata\Google\Cloud\Recommender\V1;

class RecommenderService
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
        \GPBMetadata\Google\Cloud\Recommender\V1\Recommendation::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0af0160a35676f6f676c652f636c6f75642f7265636f6d6d656e6465722f" .
            "76312f7265636f6d6d656e6465725f736572766963652e70726f746f121b" .
            "676f6f676c652e636c6f75642e7265636f6d6d656e6465722e76311a1767" .
            "6f6f676c652f6170692f636c69656e742e70726f746f1a1f676f6f676c65" .
            "2f6170692f6669656c645f6265686176696f722e70726f746f1a19676f6f" .
            "676c652f6170692f7265736f757263652e70726f746f1a30676f6f676c65" .
            "2f636c6f75642f7265636f6d6d656e6465722f76312f7265636f6d6d656e" .
            "646174696f6e2e70726f746f229d010a1a4c6973745265636f6d6d656e64" .
            "6174696f6e7352657175657374123e0a06706172656e7418012001280942" .
            "2ee04102fa41280a267265636f6d6d656e6465722e676f6f676c65617069" .
            "732e636f6d2f5265636f6d6d656e64657212160a09706167655f73697a65" .
            "1802200128054203e0410112170a0a706167655f746f6b656e1803200128" .
            "094203e04101120e0a0666696c746572180520012809227c0a1b4c697374" .
            "5265636f6d6d656e646174696f6e73526573706f6e736512440a0f726563" .
            "6f6d6d656e646174696f6e7318012003280b322b2e676f6f676c652e636c" .
            "6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e646174" .
            "696f6e12170a0f6e6578745f706167655f746f6b656e180220012809225b" .
            "0a184765745265636f6d6d656e646174696f6e52657175657374123f0a04" .
            "6e616d651801200128094231e04102fa412b0a297265636f6d6d656e6465" .
            "722e676f6f676c65617069732e636f6d2f5265636f6d6d656e646174696f" .
            "6e2296020a204d61726b5265636f6d6d656e646174696f6e436c61696d65" .
            "6452657175657374123f0a046e616d651801200128094231e04102fa412b" .
            "0a297265636f6d6d656e6465722e676f6f676c65617069732e636f6d2f52" .
            "65636f6d6d656e646174696f6e12680a0e73746174655f6d657461646174" .
            "6118022003280b32502e676f6f676c652e636c6f75642e7265636f6d6d65" .
            "6e6465722e76312e4d61726b5265636f6d6d656e646174696f6e436c6169" .
            "6d6564526571756573742e53746174654d65746164617461456e74727912" .
            "110a04657461671803200128094203e041021a340a1253746174654d6574" .
            "6164617461456e747279120b0a036b6579180120012809120d0a0576616c" .
            "75651802200128093a023801229a020a224d61726b5265636f6d6d656e64" .
            "6174696f6e53756363656564656452657175657374123f0a046e616d6518" .
            "01200128094231e04102fa412b0a297265636f6d6d656e6465722e676f6f" .
            "676c65617069732e636f6d2f5265636f6d6d656e646174696f6e126a0a0e" .
            "73746174655f6d6574616461746118022003280b32522e676f6f676c652e" .
            "636c6f75642e7265636f6d6d656e6465722e76312e4d61726b5265636f6d" .
            "6d656e646174696f6e537563636565646564526571756573742e53746174" .
            "654d65746164617461456e74727912110a04657461671803200128094203" .
            "e041021a340a1253746174654d65746164617461456e747279120b0a036b" .
            "6579180120012809120d0a0576616c75651802200128093a023801229402" .
            "0a1f4d61726b5265636f6d6d656e646174696f6e4661696c656452657175" .
            "657374123f0a046e616d651801200128094231e04102fa412b0a29726563" .
            "6f6d6d656e6465722e676f6f676c65617069732e636f6d2f5265636f6d6d" .
            "656e646174696f6e12670a0e73746174655f6d6574616461746118022003" .
            "280b324f2e676f6f676c652e636c6f75642e7265636f6d6d656e6465722e" .
            "76312e4d61726b5265636f6d6d656e646174696f6e4661696c6564526571" .
            "756573742e53746174654d65746164617461456e74727912110a04657461" .
            "671803200128094203e041021a340a1253746174654d6574616461746145" .
            "6e747279120b0a036b6579180120012809120d0a0576616c756518022001" .
            "28093a023801329d0a0a0b5265636f6d6d656e64657212ed010a134c6973" .
            "745265636f6d6d656e646174696f6e7312372e676f6f676c652e636c6f75" .
            "642e7265636f6d6d656e6465722e76312e4c6973745265636f6d6d656e64" .
            "6174696f6e73526571756573741a382e676f6f676c652e636c6f75642e72" .
            "65636f6d6d656e6465722e76312e4c6973745265636f6d6d656e64617469" .
            "6f6e73526573706f6e7365226382d3e493024412422f76312f7b70617265" .
            "6e743d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7265636f" .
            "6d6d656e646572732f2a7d2f7265636f6d6d656e646174696f6e73da4106" .
            "706172656e74da410d706172656e742c66696c74657212ca010a11476574" .
            "5265636f6d6d656e646174696f6e12352e676f6f676c652e636c6f75642e" .
            "7265636f6d6d656e6465722e76312e4765745265636f6d6d656e64617469" .
            "6f6e526571756573741a2b2e676f6f676c652e636c6f75642e7265636f6d" .
            "6d656e6465722e76312e5265636f6d6d656e646174696f6e225182d3e493" .
            "024412422f76312f7b6e616d653d70726f6a656374732f2a2f6c6f636174" .
            "696f6e732f2a2f7265636f6d6d656e646572732f2a2f7265636f6d6d656e" .
            "646174696f6e732f2a7dda41046e616d6512fd010a194d61726b5265636f" .
            "6d6d656e646174696f6e436c61696d6564123d2e676f6f676c652e636c6f" .
            "75642e7265636f6d6d656e6465722e76312e4d61726b5265636f6d6d656e" .
            "646174696f6e436c61696d6564526571756573741a2b2e676f6f676c652e" .
            "636c6f75642e7265636f6d6d656e6465722e76312e5265636f6d6d656e64" .
            "6174696f6e227482d3e4930253224e2f76312f7b6e616d653d70726f6a65" .
            "6374732f2a2f6c6f636174696f6e732f2a2f7265636f6d6d656e64657273" .
            "2f2a2f7265636f6d6d656e646174696f6e732f2a7d3a6d61726b436c6169" .
            "6d65643a012ada41186e616d652c73746174655f6d657461646174612c65" .
            "7461671283020a1b4d61726b5265636f6d6d656e646174696f6e53756363" .
            "6565646564123f2e676f6f676c652e636c6f75642e7265636f6d6d656e64" .
            "65722e76312e4d61726b5265636f6d6d656e646174696f6e537563636565" .
            "646564526571756573741a2b2e676f6f676c652e636c6f75642e7265636f" .
            "6d6d656e6465722e76312e5265636f6d6d656e646174696f6e227682d3e4" .
            "93025522502f76312f7b6e616d653d70726f6a656374732f2a2f6c6f6361" .
            "74696f6e732f2a2f7265636f6d6d656e646572732f2a2f7265636f6d6d65" .
            "6e646174696f6e732f2a7d3a6d61726b5375636365656465643a012ada41" .
            "186e616d652c73746174655f6d657461646174612c6574616712fa010a18" .
            "4d61726b5265636f6d6d656e646174696f6e4661696c6564123c2e676f6f" .
            "676c652e636c6f75642e7265636f6d6d656e6465722e76312e4d61726b52" .
            "65636f6d6d656e646174696f6e4661696c6564526571756573741a2b2e67" .
            "6f6f676c652e636c6f75642e7265636f6d6d656e6465722e76312e526563" .
            "6f6d6d656e646174696f6e227382d3e4930252224d2f76312f7b6e616d65" .
            "3d70726f6a656374732f2a2f6c6f636174696f6e732f2a2f7265636f6d6d" .
            "656e646572732f2a2f7265636f6d6d656e646174696f6e732f2a7d3a6d61" .
            "726b4661696c65643a012ada41186e616d652c73746174655f6d65746164" .
            "6174612c657461671a4eca411a7265636f6d6d656e6465722e676f6f676c" .
            "65617069732e636f6dd2412e68747470733a2f2f7777772e676f6f676c65" .
            "617069732e636f6d2f617574682f636c6f75642d706c6174666f726d42a2" .
            "010a1f636f6d2e676f6f676c652e636c6f75642e7265636f6d6d656e6465" .
            "722e763142105265636f6d6d656e64657250726f746f50015a46676f6f67" .
            "6c652e676f6c616e672e6f72672f67656e70726f746f2f676f6f676c6561" .
            "7069732f636c6f75642f7265636f6d6d656e6465722f76313b7265636f6d" .
            "6d656e646572a2020443524543aa021b476f6f676c652e436c6f75642e52" .
            "65636f6d6d656e6465722e5631620670726f746f33"
        ), true);

        static::$is_initialized = true;
    }
}
