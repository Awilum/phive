<?php
// @codingStandardsIgnoreFile
// @codeCoverageIgnoreStart
// this is an autogenerated file - do not edit
spl_autoload_register(
    function($class) {
        static $classes = null;
        if ($classes === null) {
            $classes = array(
                'theseer\\phive\\cli' => '/CLI.php',
                'theseer\\phive\\clicommandoptions' => '/CLICommandOptions.php',
                'theseer\\phive\\clicommandoptionsexception' => '/CLICommandOptionsException.php',
                'theseer\\phive\\clirequest' => '/CLIRequest.php',
                'theseer\\phive\\coloredconsolelogger' => '/shared/logger/ColoredConsoleLogger.php',
                'theseer\\phive\\commandinterface' => '/commands/CommandInterface.php',
                'theseer\\phive\\commandlocator' => '/commands/CommandLocator.php',
                'theseer\\phive\\commandlocatorexception' => '/commands/CommandLocatorException.php',
                'theseer\\phive\\config' => '/Config.php',
                'theseer\\phive\\consolelogger' => '/shared/logger/ConsoleLogger.php',
                'theseer\\phive\\curl' => '/shared/curl/Curl.php',
                'theseer\\phive\\curlconfig' => '/shared/curl/CurlConfig.php',
                'theseer\\phive\\curlexception' => '/shared/curl/CurlException.php',
                'theseer\\phive\\curlresponse' => '/shared/curl/CurlResponse.php',
                'theseer\\phive\\directory' => '/shared/Directory.php',
                'theseer\\phive\\directoryexception' => '/shared/DirectoryException.php',
                'theseer\\phive\\downloadfailedexception' => '/shared/DownloadFailedException.php',
                'theseer\\phive\\environment' => '/shared/Environment.php',
                'theseer\\phive\\factory' => '/Factory.php',
                'theseer\\phive\\gnupgkeydownloader' => '/services/key/gpg/GnupgKeyDownloader.php',
                'theseer\\phive\\gnupgkeyimporter' => '/services/key/gpg/GnupgKeyImporter.php',
                'theseer\\phive\\gnupgsignatureverifier' => '/services/signature/gpg/GnupgSignatureVerifier.php',
                'theseer\\phive\\gnupgverificationresult' => '/services/signature/gpg/GnupgVerificationResult.php',
                'theseer\\phive\\helpcommand' => '/commands/help/HelpCommand.php',
                'theseer\\phive\\installcommand' => '/commands/install/InstallCommand.php',
                'theseer\\phive\\installcommandconfig' => '/commands/install/InstallCommandConfig.php',
                'theseer\\phive\\installservice' => '/services/install/InstallService.php',
                'theseer\\phive\\keydownloaderinterface' => '/services/key/KeyDownloaderInterface.php',
                'theseer\\phive\\keyimporterinterface' => '/services/key/KeyImporterInterface.php',
                'theseer\\phive\\keyservice' => '/services/key/KeyService.php',
                'theseer\\phive\\loggerinterface' => '/shared/logger/LoggerInterface.php',
                'theseer\\phive\\phar' => '/shared/Phar.php',
                'theseer\\phive\\phardownloader' => '/services/phar/PharDownloader.php',
                'theseer\\phive\\pharfile' => '/shared/PharFile.php',
                'theseer\\phive\\pharinstaller' => '/services/phar/PharInstaller.php',
                'theseer\\phive\\pharioclient' => '/services/install/PharIoClient.php',
                'theseer\\phive\\pharservice' => '/services/phar/PharService.php',
                'theseer\\phive\\phiveversion' => '/commands/version/PhiveVersion.php',
                'theseer\\phive\\signatureservice' => '/services/signature/SignatureService.php',
                'theseer\\phive\\signatureverifierinterface' => '/services/signature/SignatureVerifierInterface.php',
                'theseer\\phive\\url' => '/shared/Url.php',
                'theseer\\phive\\verificationfailedexception' => '/services/signature/VerificationFailedException.php',
                'theseer\\phive\\version' => '/shared/Version.php',
                'theseer\\phive\\versioncommand' => '/commands/version/VersionCommand.php'
            );
        }
        $cn = strtolower($class);
        if (isset($classes[$cn])) {
            require __DIR__ . $classes[$cn];
        }
    },
    true,
    false
);
// @codeCoverageIgnoreEnd
