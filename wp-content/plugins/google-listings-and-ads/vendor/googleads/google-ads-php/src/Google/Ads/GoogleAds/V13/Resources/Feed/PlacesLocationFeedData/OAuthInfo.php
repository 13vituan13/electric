<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v13/resources/feed.proto

namespace Google\Ads\GoogleAds\V13\Resources\Feed\PlacesLocationFeedData;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Data used for authorization using OAuth.
 *
 * Generated from protobuf message <code>google.ads.googleads.v13.resources.Feed.PlacesLocationFeedData.OAuthInfo</code>
 */
class OAuthInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_method = 4;</code>
     */
    protected $http_method = null;
    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_request_url = 5;</code>
     */
    protected $http_request_url = null;
    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_authorization_header = 6;</code>
     */
    protected $http_authorization_header = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $http_method
     *           The HTTP method used to obtain authorization.
     *     @type string $http_request_url
     *           The HTTP request URL used to obtain authorization.
     *     @type string $http_authorization_header
     *           The HTTP authorization header used to obtain authorization.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V13\Resources\Feed::initOnce();
        parent::__construct($data);
    }

    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_method = 4;</code>
     * @return string
     */
    public function getHttpMethod()
    {
        return isset($this->http_method) ? $this->http_method : '';
    }

    public function hasHttpMethod()
    {
        return isset($this->http_method);
    }

    public function clearHttpMethod()
    {
        unset($this->http_method);
    }

    /**
     * The HTTP method used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_method = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpMethod($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_method = $var;

        return $this;
    }

    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_request_url = 5;</code>
     * @return string
     */
    public function getHttpRequestUrl()
    {
        return isset($this->http_request_url) ? $this->http_request_url : '';
    }

    public function hasHttpRequestUrl()
    {
        return isset($this->http_request_url);
    }

    public function clearHttpRequestUrl()
    {
        unset($this->http_request_url);
    }

    /**
     * The HTTP request URL used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_request_url = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpRequestUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_request_url = $var;

        return $this;
    }

    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_authorization_header = 6;</code>
     * @return string
     */
    public function getHttpAuthorizationHeader()
    {
        return isset($this->http_authorization_header) ? $this->http_authorization_header : '';
    }

    public function hasHttpAuthorizationHeader()
    {
        return isset($this->http_authorization_header);
    }

    public function clearHttpAuthorizationHeader()
    {
        unset($this->http_authorization_header);
    }

    /**
     * The HTTP authorization header used to obtain authorization.
     *
     * Generated from protobuf field <code>optional string http_authorization_header = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setHttpAuthorizationHeader($var)
    {
        GPBUtil::checkString($var, True);
        $this->http_authorization_header = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(OAuthInfo::class, \Google\Ads\GoogleAds\V13\Resources\Feed_PlacesLocationFeedData_OAuthInfo::class);

