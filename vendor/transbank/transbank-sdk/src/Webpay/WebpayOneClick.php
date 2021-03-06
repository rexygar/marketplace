<?php
namespace Transbank\Webpay;

use Transbank\Webpay\Exceptions\InvalidAmountException;

class removeUser
{
    public $arg0;//oneClickRemoveUserInput
}

class oneClickRemoveUserInput
{
    public $tbkUser;//string
    public $username;//string
}

class removeUserResponse
{
    public $return;//boolean
}

class initInscription
{
    public $arg0;//oneClickInscriptionInput
}

class oneClickInscriptionInput
{
    public $email;//string
    public $responseURL;//string
    public $username;//string
}

class initInscriptionResponse
{
    public $return;//oneClickInscriptionOutput
}

class oneClickInscriptionOutput
{
    public $token;//string
    public $urlWebpay;//string
}

class finishInscription
{
    public $arg0;//oneClickFinishInscriptionInput
}

class oneClickFinishInscriptionInput
{
    public $token;//string
}

class finishInscriptionResponse
{
    public $return;//oneClickFinishInscriptionOutput
}

class oneClickFinishInscriptionOutput
{
    public $authCode;//string
    public $creditCardType;//creditCardType
    public $last4CardDigits;//string
    public $responseCode;//int
    public $tbkUser;//string
}

class codeReverseOneClick
{
    public $arg0;//oneClickReverseInput
}

class oneClickReverseInput
{
    public $buyorder;//long
}

class codeReverseOneClickResponse
{
    public $return;//oneClickReverseOutput
}

class oneClickReverseOutput
{
    public $reverseCode;//long
    public $reversed;//boolean
}

class authorize
{
    public $arg0;//oneClickPayInput
}

class oneClickPayInput
{
    public $amount;//decimal
    public $buyOrder;//long
    public $tbkUser;//string
    public $username;//string
}

class authorizeResponse
{
    public $return;//oneClickPayOutput
}

class oneClickPayOutput
{
    public $authorizationCode;//string
    public $creditCardType;//creditCardType
    public $last4CardDigits;//string
    public $responseCode;//int
    public $transactionId;//long
}

class reverse
{
    public $arg0;//oneClickReverseInput
}

class reverseResponse
{
    public $return;//boolean
}

class WebpayOneClick
{
    public $soapClient;
    public $config;

    /** Configuraci??n de URL seg??n Ambiente */
    private static $WSDL_URL_NORMAL = array(
        "INTEGRACION" => "https://webpay3gint.transbank.cl/webpayserver/wswebpay/OneClickPaymentService?wsdl",
        "CERTIFICACION" => "https://webpay3gint.transbank.cl/webpayserver/wswebpay/OneClickPaymentService?wsdl",
        "TEST" => "https://webpay3gint.transbank.cl/webpayserver/wswebpay/OneClickPaymentService?wsdl",
        "LIVE" => "https://webpay3g.transbank.cl/webpayserver/wswebpay/OneClickPaymentService?wsdl",
        "PRODUCCION" => "https://webpay3g.transbank.cl/webpayserver/wswebpay/OneClickPaymentService?wsdl",
    );

    /** Descripci??n de codigos de resultado */
    private static $RESULT_CODES = array(
        "0" => "Transacci??n aprobada",
        "-1" => "Rechazo de transacci??n",
        "-2" => "Rechazo de transacci??n",
        "-3" => "Rechazo de transacci??n",
        "-4" => "Rechazo de transacci??n",
        "-5" => "Rechazo de transacci??n",
        "-6" => "Rechazo de transacci??n",
        "-7" => "Rechazo de transacci??n",
        "-8" => "Rechazo de transacci??n",
        "-97" => "limites Oneclick, m??ximo monto diario de pago excedido",
        "-98" => "limites Oneclick, m??ximo monto de pago excedido",
        "-99" => "limites Oneclick, m??xima cantidad de pagos diarios excedido"
    );

    private static $classmap = array('removeUser' => 'Transbank\Webpay\removeUser'
        , 'oneClickRemoveUserInput' => 'Transbank\Webpay\oneClickRemoveUserInput'
        , 'baseBean' => 'Transbank\Webpay\baseBean'
        , 'removeUserResponse' => 'Transbank\Webpay\removeUserResponse'
        , 'initInscription' => 'Transbank\Webpay\initInscription'
        , 'oneClickInscriptionInput' => 'Transbank\Webpay\oneClickInscriptionInput'
        , 'initInscriptionResponse' => 'Transbank\Webpay\initInscriptionResponse'
        , 'oneClickInscriptionOutput' => 'Transbank\Webpay\oneClickInscriptionOutput'
        , 'finishInscription' => 'Transbank\Webpay\finishInscription'
        , 'oneClickFinishInscriptionInput' => 'Transbank\Webpay\oneClickFinishInscriptionInput'
        , 'finishInscriptionResponse' => 'Transbank\Webpay\finishInscriptionResponse'
        , 'oneClickFinishInscriptionOutput' => 'Transbank\Webpay\oneClickFinishInscriptionOutput'
        , 'codeReverseOneClick' => 'Transbank\Webpay\codeReverseOneClick'
        , 'oneClickReverseInput' => 'Transbank\Webpay\oneClickReverseInput'
        , 'codeReverseOneClickResponse' => 'Transbank\Webpay\codeReverseOneClickResponse'
        , 'oneClickReverseOutput' => 'Transbank\Webpay\oneClickReverseOutput'
        , 'authorize' => 'Transbank\Webpay\authorize'
        , 'oneClickPayInput' => 'Transbank\Webpay\oneClickPayInput'
        , 'authorizeResponse' => 'Transbank\Webpay\authorizeResponse'
        , 'oneClickPayOutput' => 'Transbank\Webpay\oneClickPayOutput'
        , 'reverse' => 'Transbank\Webpay\reverse'
        , 'reverseResponse' => 'Transbank\Webpay\reverseResponse'
    );

    public function __construct($config)
    {
        $this->config = $config;
        $privateKey = $this->config->getPrivateKey();
        $publicCert = $this->config->getPublicCert();

        $modo = $this->config->getEnvironmentDefault();
        $url = WebpayOneClick::$WSDL_URL_NORMAL[$modo];

        $this->soapClient = new WSSecuritySoapClient($url, $privateKey, $publicCert, array(
            "classmap" => self::$classmap,
            "trace" => true,
            "exceptions" => true
        ));
    }

    public function _removeUser($removeUser)
    {
        $remove = $removeUser["oneClickRemoveUserInput"];
        $removeUserResponse = $this->soapClient->removeUser(array("arg0" => $remove));
        return $removeUserResponse;
    }

    public function _initInscription($oneClickInscriptionInput)
    {
        $oneClickInscription = $oneClickInscriptionInput["oneClickInscriptionInput"];
        $initInscriptionResponse = $this->soapClient->initInscription(array("arg0" => $oneClickInscription));
        return $initInscriptionResponse;
    }

    public function _finishInscription($oneClickFinishInscriptionInput)
    {
        $oneClickFinishInscription = $oneClickFinishInscriptionInput["oneClickFinishInscriptionInput"];
        $finishInscriptionResponse = $this->soapClient->finishInscription(array("arg0" => $oneClickFinishInscription));
        return $finishInscriptionResponse;
    }

    public function _authorize($authorize)
    {
        $authorizeOneClick = $authorize["oneClickPayInput"];
        $authorizeResponse = $this->soapClient->authorize(array("arg0" => $authorizeOneClick));
        return $authorizeResponse;
    }

    public function _codeReverseOneClick($codeReverseOneClick)
    {
        $codeReverse = $codeReverseOneClick["oneClickReverseInput"];

        $codeReverseOneClickResponse = $this->soapClient->codeReverseOneClick(array("arg0" => $codeReverse));
        return $codeReverseOneClickResponse;
    }

    public function _reverse($reverse)
    {
        $reverseResponse = $this->soapClient->reverse($reverse);
        return $reverseResponse;
    }

    public function _getReason($code)
    {
        return WebPayNormal::$RESULT_CODES[$code];
    }

    /**
     * Permite realizar la inscripci??n del tarjetahabiente e informaci??n de su
     * tarjeta de cr??dito. Retorna como respuesta un token que representa la transacci??n de inscripci??n
     * y una URL (UrlWebpay),que corresponde a la URL de inscripci??n de One Click
     * */
    public function initInscription($username, $email, $urlReturn)
    {
        $error = array();
        try {
            $oneClickInscriptionInput = new oneClickInscriptionInput();

            /** nombre de usuario */
            $oneClickInscriptionInput->username = $username;

            /** email */
            $oneClickInscriptionInput->email = $email;

            /** url de respuesta */
            $oneClickInscriptionInput->responseURL = $urlReturn;

            $initInscriptionResponse = $this->_initInscription(
                array("oneClickInscriptionInput" => $oneClickInscriptionInput)
            );

            /** Validaci??n de firma del requerimiento de respuesta enviado por Webpay */
            $xmlResponse = $this->soapClient->__getLastResponse();
            $soapValidation = new SoapValidation($xmlResponse, $this->config->getWebpayCert());
            $validationResult = $soapValidation->getValidationResult();

            /** Valida conexion a Webpay. Caso correcto retorna URL y Token */
            if ($validationResult === true) {
                $oneClickInscriptionOutput = $initInscriptionResponse->return;
                return $oneClickInscriptionOutput;
            } else {
                $error["error"] = "Error validando conexi&oacute;n a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";
                $error["detail"] = "No se pudo completar la conexi&oacute;n con Webpay";
            }
        } catch (\Exception $e) {
            $error["error"] = "Error conectando a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";

            $replaceArray = array('<!--' => '', '-->' => '');
            $error["detail"] = str_replace(array_keys($replaceArray), array_values($replaceArray), $e->getMessage());
        }

        return $error;
    }

    /**
     * Permite finalizar el proceso de inscripci??n del tarjetahabiente en Oneclick.
     * Entre otras cosas, retorna el identificador del usuario en Oneclick,
     * el cual ser?? utilizado para realizar las transacciones de pago
     * */
    public function finishInscription($token)
    {
        $error = array();
        try {
            $oneClickFinishInscriptionInput = new oneClickFinishInscriptionInput();

            /** $token resultado obtenido en el metodo initInscription */
            $oneClickFinishInscriptionInput->token = $token;

            $oneClickFinishInscriptionResponse = $this->_finishInscription(
                array("oneClickFinishInscriptionInput" => $oneClickFinishInscriptionInput)
            );

            /** Validaci??n de firma del requerimiento de respuesta enviado por Webpay */
            $xmlResponse = $this->soapClient->__getLastResponse();
            $soapValidation = new SoapValidation($xmlResponse, $this->config->getWebpayCert());
            $validationResult = $soapValidation->getValidationResult();

            /** Valida conexion a Webpay. Caso correcto retorna URL y Token */
            if ($validationResult === true) {
                $oneClickFinishInscriptionOutput = $oneClickFinishInscriptionResponse->return;
                return $oneClickFinishInscriptionOutput;
            } else {
                $error["error"] = "Error validando conexi&oacute;n a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";
                $error["detail"] = "No se pudo completar la conexi&oacute;n con Webpay";
            }
        } catch (\Exception $e) {
            $error["error"] = "Error conectando a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";

            $replaceArray = array('<!--' => '', '-->' => '');
            $error["detail"] = str_replace(array_keys($replaceArray), array_values($replaceArray), $e->getMessage());
        }
        return $error;
    }

    /**
     * Permite realizar transacciones de pago. Retorna el resultado de la autorizaci??n.
     * Este m??todo que debe ser ejecutado, cada vez que el usuario
     * selecciona pagar con Oneclick
     *
     * @throws InvalidAmountException si el monto no es num??rico, o contiene decimales.
     * */
    public function authorize($buyOrder, $tbkUser, $username, $amount)
    {
        // validaciones $amount
        if (!is_numeric($amount)) {
            throw new InvalidAmountException(InvalidAmountException::NOT_NUMERIC_MESSAGE);
        }
        if ((float)$amount != (int)$amount) {
            throw new InvalidAmountException(InvalidAmountException::HAS_DECIMALS_MESSAGE);
        }
        $error = array();
        try {
            $oneClickPayInput = new oneClickPayInput();

            $oneClickPayInput->buyOrder = $buyOrder;
            $oneClickPayInput->tbkUser = $tbkUser;
            $oneClickPayInput->username = $username;
            $oneClickPayInput->amount = $amount;

            $oneClickauthorizeResponse = $this->_authorize(
                array("oneClickPayInput" => $oneClickPayInput)
            );

            /** Validaci??n de firma del requerimiento de respuesta enviado por Webpay */
            $xmlResponse = $this->soapClient->__getLastResponse();
            $soapValidation = new SoapValidation($xmlResponse, $this->config->getWebpayCert());
            $validationResult = $soapValidation->getValidationResult();

            if ($validationResult === true) {
                $oneClickPayOutput = $oneClickauthorizeResponse->return;
                return $oneClickPayOutput;
            } else {
                $error["error"] = "Error validando conexi&oacute;n a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";
                $error["detail"] = "No se pudo completar la conexi&oacute;n con Webpay";
            }
        } catch (\Exception $e) {
            $error["error"] = "Error conectando a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";

            $replaceArray = array('<!--' => '', '-->' => '');
            $error["detail"] = str_replace(array_keys($replaceArray), array_values($replaceArray), $e->getMessage());
        }
        return $error;
    }

    /**
     * Permite reversar una transacci??n de venta autorizada con anterioridad.
     * Este m??todo retorna como respuesta un identificador ??nico de la transacci??n de reversa.
     * */
    public function reverseTransaction($buyOrder)
    {
        $error = array();
        try {
            $oneClickReverseInput = new oneClickReverseInput();

            $oneClickReverseInput->buyorder = $buyOrder;

            $codeReverseOneClickResponse = $this->_codeReverseOneClick(
                array("oneClickReverseInput" => $oneClickReverseInput)
            );

            /** Validaci??n de firma del requerimiento de respuesta enviado por Webpay */
            $xmlResponse = $this->soapClient->__getLastResponse();
            $soapValidation = new SoapValidation($xmlResponse, $this->config->getWebpayCert());
            $validationResult = $soapValidation->getValidationResult();

            if ($validationResult === true) {
                $oneClickReverseOutput = $codeReverseOneClickResponse->return;
                return $oneClickReverseOutput;
            } else {
                $error["error"] = "Error validando conexi&oacute;n a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";
                $error["detail"] = "No se pudo completar la conexi&oacute;n con Webpay";
            }
        } catch (\Exception $e) {
            $error["error"] = "Error conectando a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";

            $replaceArray = array('<!--' => '', '-->' => '');
            $error["detail"] = str_replace(array_keys($replaceArray), array_values($replaceArray), $e->getMessage());
        }
        return $error;
    }

    /**
     * Permite eliminar la inscripci??n de un usuario en Webpay OneClick ya sea por la eliminaci??n de un cliente
     * en su sistema o por la solicitud de este para no operar con esta forma de pago.
     * */
    public function removeUser($tbkUser, $username)
    {
        $error = array();
        try {
            $oneClickRemoveUserInput = new oneClickRemoveUserInput();

            $oneClickRemoveUserInput->tbkUser = $tbkUser;
            $oneClickRemoveUserInput->username = $username;

            $removeUserResponse = $this->_removeUser(
                array("oneClickRemoveUserInput" => $oneClickRemoveUserInput)
            );

            /** Validaci??n de firma del requerimiento de respuesta enviado por Webpay */
            $xmlResponse = $this->soapClient->__getLastResponse();
            $soapValidation = new SoapValidation($xmlResponse, $this->config->getWebpayCert());
            $validationResult = $soapValidation->getValidationResult();

            if ($validationResult === true) {
                $oneClickremoveUserOutput = $removeUserResponse->return;
                return $oneClickremoveUserOutput;
            } else {
                $error["error"] = "Error validando conexi&oacute;n a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";
                $error["detail"] = "No se pudo completar la conexi&oacute;n con Webpay";
            }
        } catch (\Exception $e) {
            $error["error"] = "Error conectando a Webpay (Verificar que la informaci&oacute;n del certificado sea correcta)";

            $replaceArray = array('<!--' => '', '-->' => '');
            $error["detail"] = str_replace(array_keys($replaceArray), array_values($replaceArray), $e->getMessage());
        }
        return $error;
    }
}
