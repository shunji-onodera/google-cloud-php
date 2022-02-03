<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/security/privateca/v1/resources.proto

namespace Google\Cloud\Security\PrivateCA\V1\CaPool;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Options relating to the publication of each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CA
 * certificate and CRLs and their inclusion as extensions in issued
 * [Certificates][google.cloud.security.privateca.v1.Certificate]. The options set here apply to certificates
 * issued by any [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority] in the [CaPool][google.cloud.security.privateca.v1.CaPool].
 *
 * Generated from protobuf message <code>google.cloud.security.privateca.v1.CaPool.PublishingOptions</code>
 */
class PublishingOptions extends \Google\Protobuf\Internal\Message
{
    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CA certificate and
     * includes its URL in the "Authority Information Access" X.509 extension
     * in all issued [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, the CA
     * certificate will not be published and the corresponding X.509 extension
     * will not be written in issued certificates.
     *
     * Generated from protobuf field <code>bool publish_ca_cert = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $publish_ca_cert = false;
    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CRL and includes its
     * URL in the "CRL Distribution Points" X.509 extension in all issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, CRLs will not be published
     * and the corresponding X.509 extension will not be written in issued
     * certificates.
     * CRLs will expire 7 days from their creation. However, we will rebuild
     * daily. CRLs are also rebuilt shortly after a certificate is revoked.
     *
     * Generated from protobuf field <code>bool publish_crl = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     */
    protected $publish_crl = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $publish_ca_cert
     *           Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CA certificate and
     *           includes its URL in the "Authority Information Access" X.509 extension
     *           in all issued [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, the CA
     *           certificate will not be published and the corresponding X.509 extension
     *           will not be written in issued certificates.
     *     @type bool $publish_crl
     *           Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CRL and includes its
     *           URL in the "CRL Distribution Points" X.509 extension in all issued
     *           [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, CRLs will not be published
     *           and the corresponding X.509 extension will not be written in issued
     *           certificates.
     *           CRLs will expire 7 days from their creation. However, we will rebuild
     *           daily. CRLs are also rebuilt shortly after a certificate is revoked.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Security\Privateca\V1\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CA certificate and
     * includes its URL in the "Authority Information Access" X.509 extension
     * in all issued [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, the CA
     * certificate will not be published and the corresponding X.509 extension
     * will not be written in issued certificates.
     *
     * Generated from protobuf field <code>bool publish_ca_cert = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getPublishCaCert()
    {
        return $this->publish_ca_cert;
    }

    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CA certificate and
     * includes its URL in the "Authority Information Access" X.509 extension
     * in all issued [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, the CA
     * certificate will not be published and the corresponding X.509 extension
     * will not be written in issued certificates.
     *
     * Generated from protobuf field <code>bool publish_ca_cert = 1 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setPublishCaCert($var)
    {
        GPBUtil::checkBool($var);
        $this->publish_ca_cert = $var;

        return $this;
    }

    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CRL and includes its
     * URL in the "CRL Distribution Points" X.509 extension in all issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, CRLs will not be published
     * and the corresponding X.509 extension will not be written in issued
     * certificates.
     * CRLs will expire 7 days from their creation. However, we will rebuild
     * daily. CRLs are also rebuilt shortly after a certificate is revoked.
     *
     * Generated from protobuf field <code>bool publish_crl = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @return bool
     */
    public function getPublishCrl()
    {
        return $this->publish_crl;
    }

    /**
     * Optional. When true, publishes each [CertificateAuthority][google.cloud.security.privateca.v1.CertificateAuthority]'s CRL and includes its
     * URL in the "CRL Distribution Points" X.509 extension in all issued
     * [Certificates][google.cloud.security.privateca.v1.Certificate]. If this is false, CRLs will not be published
     * and the corresponding X.509 extension will not be written in issued
     * certificates.
     * CRLs will expire 7 days from their creation. However, we will rebuild
     * daily. CRLs are also rebuilt shortly after a certificate is revoked.
     *
     * Generated from protobuf field <code>bool publish_crl = 2 [(.google.api.field_behavior) = OPTIONAL];</code>
     * @param bool $var
     * @return $this
     */
    public function setPublishCrl($var)
    {
        GPBUtil::checkBool($var);
        $this->publish_crl = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PublishingOptions::class, \Google\Cloud\Security\PrivateCA\V1\CaPool_PublishingOptions::class);

