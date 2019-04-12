<?php

namespace Sanchescom\Utility;

/**
 * Class NetworkSetup.
 *
 * @method static setadditionalroutes(string $networkService) [ <dest> <mask> <gateway> ] Set additional IPv4 routes associated with $networkService by specifying one or more [ <dest> <mask> <gateway> ] tuples. Remove additional routes by specifying no arguments. If <gateway> is "", the route is direct to the interface
 * @method static setv4off(string $networkService) Turn IPv4 off on $networkService.
 * @method static setv6off(string $networkService) Turn IPv6 off on $networkService.
 * @method static setv6automatic(string $networkService) Set the service to get its IPv6 info automatically.
 * @method static setv6LinkLocal(string $networkService) Set the service to use its IPv6 only for link local.
 * @method static setv6manual(string $networkService, string $address, int $prefixlength, string $router) Set the service to get its IPv6 info manually. Specify <address> <prefixLength> and <router>.
 * @method static getv6additionalroutes(string $networkService) Get additional IPv6 routes associated with $networkService
 * @method static setv6additionalroutes(string $networkService) [ <dest> <prefixlength> <gateway> ] Set additional IPv6 routes associated with $networkService by specifying one or more [ <dest> <prefixlength> <gateway> ] tuples. Remove additional routes by specifying no arguments. If <gateway> is "", the route is direct to the interface
 * @method static getdnsservers(string $networkService) Display DNS info for $networkService.
 * @method static setdnsservers(string $networkService) <dns1> [dns2] [...] Set the $networkService DNS servers to <dns1> [dns2] [...]. Any number of dns servers can be specified. Specify "Empty" for <dns1> to clear all DNS entries.
 * @method static getsearchdomains(string $networkService) Display Domain Name info for $networkService.
 * @method static setsearchdomains(string $networkService) <domain1> [domain2] [...] Set the $networkService Domain Name servers to <domain1> [domain2] [...]. Any number of Domain Name 	servers can be specified. Specify "Empty" for <domain1> to clear all Domain Name entries.
 * @method static create6to4service() <newnetworkservicename> Create a 6 to 4 service with name <newnetworkservicename>.
 * @method static set6to4automatic(string $networkService) Set the service to get its 6 to 4 info automatically.
 * @method static set6to4manual(string $networkService) <relayaddress> Set the service to get its 6 to 4 info manually. Specify <relayaddress> for the relay address.
 * @method static getftpproxy(string $networkService) Display FTP proxy (server, port, enabled value) info for $networkService.
 * @method static setftpproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set FTP proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setftpproxystate(string $networkService) <on off> Set FTP proxy to either <on> or <off>.
 * @method static getwebproxy(string $networkService) Display Web proxy (server, port, enabled value) info for $networkService.
 * @method static setwebproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set Web proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setwebproxystate(string $networkService) <on off> Set Web proxy to either <on> or <off>.
 * @method static getsecurewebproxy(string $networkService) Display Secure Web proxy (server, port, enabled value) info for $networkService.
 * @method static setsecurewebproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set Secure Web proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setsecurewebproxystate(string $networkService) <on off> Set SecureWeb proxy to either <on> or <off>.
 * @method static getstreamingproxy(string $networkService) Display Streaming proxy (server, port, enabled value) info for $networkService.
 * @method static setstreamingproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set Streaming proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setstreamingproxystate(string $networkService) <on off> Set Streaming proxy to either <on> or <off>.
 * @method static getgopherproxy(string $networkService) Display Gopher proxy (server, port, enabled value) info for $networkService.
 * @method static setgopherproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set Gopher proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setgopherproxystate(string $networkService) <on off> Set Gopher proxy to either <on> or <off>.
 * @method static getsocksfirewallproxy(string $networkService) Display SOCKS Firewall proxy (server, port, enabled value) info for $networkService.
 * @method static setsocksfirewallproxy(string $networkService) <domain> <port number> <authenticated> <username> <password> Set SOCKS Firewall proxy for $networkService with <domain> and <port number>. Turns proxy on. Optionally, specify <on> or <off> for <authenticated> to enable and disable authenticated proxy support. Specify <username> and <password> if you turn authenticated proxy support on.
 * @method static setsocksfirewallproxystate(string $networkService) <on off> Set SOCKS Firewall proxy to either <on> or <off>.
 * @method static getproxybypassdomains(string $networkService) Display Bypass Domain Names for $networkService.
 * @method static setproxybypassdomains(string $networkService) <domain1> [domain2] [...] Set the Bypass Domain Name Servers for $networkService to <domain1> [domain2] [...]. Any number of Domain Name servers can be specified. Specify "Empty" for <domain1> to clear all Domain Name entries.
 * @method static getproxyautodiscovery(string $networkService) Display whether Proxy Auto Discover is on or off for <network service>.
 * @method static setproxyautodiscovery(string $networkService) <on off> Set Proxy Auto Discovery to either <on> or <off>.
 * @method static getpassiveftp(string $networkService) Display whether Passive FTP is on or off for $networkService.
 * @method static setpassiveftp(string $networkService) <on off> Set Passive FTP to either <on> or <off>.
 * @method static setautoproxyurl(string $networkService) <url> Set proxy autoconfig to url for $networkService and enable it.
 * @method static getautoproxyurl(string $networkService) Display proxy autoconfig (url, enabled) info for $networkService.
 * @method static setautoproxystate(string $networkService) <on off> Set proxy autoconfig to either <on> or <off>.
 * @method static getairportnetwork() <device name> Display current WiFi Network for <device name>.
 * @method static setairportnetwork() <device name> <network> [password] Set WiFi Network to <network> for <device name>. If a password is included, it gets stored in the keychain.
 * @method static getairportpower() <device name> Display whether WiFi power is on or off for <device name>.
 * @method static setairportpower() <device name> <on off> Set WiFi power for <device name> to either <on> or <off>.
 * @method static listpreferredwirelessnetworks() <device name> List the preferred wireless networks for <device name>.
 * @method static addpreferredwirelessnetworkatindex() <device name> <network> <index> <security type> [password] Add wireless network named <network> to preferred list for <device name> at <index>. For security type, use OPEN for none, WPA for WPA Personal, WPAE for WPA Enterprise, WPA2 for WPA2 Personal, WPA2E for WPA2 Enterprise, WEP for plain WEP, and 8021XWEP for 802.1X WEP. If a password is included, it gets stored in the keychain.
 * @method static removepreferredwirelessnetwork() <device name> <network> Remove <network> from the preferred wireless network list for <device name>.
 * @method static removeallpreferredwirelessnetworks() <device name> Remove all networks from the preferred wireless network list for <device name>.
 * @method static getnetworkserviceenabled(string $networkService) Display whether a service is on or off (enabled or disabled).
 * @method static setnetworkserviceenabled(string $networkService) <on off> Set $networkService to either <on> or <off> (enabled or disabled).
 * @method static createnetworkservice() <newnetworkservicename> <hardwareport> Create a service named $networkService on port <hardwareport>. The new service will be enabled by default.
 * @method static renamenetworkservice(string $networkService) <newnetworkservicename> Rename $networkService to <newnetworkservicename>.
 * @method static duplicatenetworkservice(string $networkService) <newnetworkservicename> Duplicate $networkService and name it with <newnetworkservicename>.
 * @method static removenetworkservice(string $networkService) Remove the service named $networkService. Will fail if this is the only service on the hardware port that $networkService is on.
 * @method static ordernetworkservices() <service1> <service2> <service3> <...> Order the services in order specified. Use "listnetworkserviceorder" to view service order. Note: use quotes around service names which contain spaces (ie. "Builtin Ethernet").
 * @method static setMTUAndMediaAutomatically() <hardwareport or device name> Set hardwareport or device specified back to automatically setting the MTU and Media.
 * @method static getMTU() <hardwareport or device name> Get the MTU value for hardwareport or device specified.
 * @method static setMTU() <hardwareport or device name> <value> Set MTU for hardwareport or device specified.
 * @method static listvalidMTUrange() <hardwareport or device name> List the valid MTU range for hardwareport or device specified.
 * @method static getmedia() <hardwareport or device name> Show both the current setting for media and the active media on hardwareport or device specified.
 * @method static setmedia() <hardwareport or device name> <subtype> [option1] [option2] [...] Set media for hardwareport or device specified to subtype. Specify optional [option1] and additional options depending on subtype. Any number of valid options can be specified.
 * @method static listvalidmedia() <hardwareport or device name> 	List valid media options for hardwareport or device name. Enumerates available subtypes and options per subtype.
 * @method static createVLAN() <VLAN name> <device name> <tag> Create a VLAN with name <VLAN name> over device <device name> with unique tag <tag>. A default network service will be created over the VLAN.
 * @method static deleteVLAN() <VLAN name> <device name> <tag> Delete the VLAN with name <VLAN name> over the parent device <device name> with unique tag <tag>. If there are network services running over the VLAN they will be deleted.
 * @method static listVLANs() List the VLANs that have been created.
 * @method static listdevicesthatsupportVLAN() List the devices that support VLANs.
 * @method static isBondSupported() <device name ie., en0> Return YES if the specified device can be added to a bond. NO if it cannot.
 * @method static createBond() <user defined name> <device name 1> <device name 2> <...> Create a new bond and give it the user defined name. Add the specified devices, if any, to the bond.
 * @method static deleteBond() <bond name ie., bond0> Delete the bond with the specified devicename.
 * @method static addDeviceToBond() <device name> <bond name> Add the specified device to the specified bond.
 * @method static removeDeviceFromBond() <device name> <bond name> Remove the specified device from the specified bond
 * @method static listBonds() List all of the bonds.
 * @method static showBondStatus() <bond name ie., bond0> Display the status of the specified bond.
 * @method static listpppoeservices() List all of the PPPoE services in the current set.
 * @method static showpppoestatus() <service name ie., MyPPPoEService> Display the status of the specified PPPoE service.
 * @method static createpppoeservice() <device name ie., en0> <service name> <account name> <password> [pppoe service name] Create a PPPoE service on the specified device with the service name specified. The "pppoe service name" is optional and may not be supported by the service provider.
 * @method static deletepppoeservice() <service name> Delete the PPPoE service.
 * @method static setpppoeaccountname() <service name> <account name> Sets the account name for the specified service.
 * @method static setpppoepassword() <service name> <password> Sets the password stored in the keychain for the specified service.
 * @method static connectpppoeservice() <service name> Connect the PPPoE service.
 * @method static disconnectpppoeservice() <service name> Disconnect the PPPoE service.
 * @method static getcurrentlocation() Display the name of the current location.
 * @method static listlocations() List all of the locations.
 * @method static createlocation() <location name> [populate] Create a new network location with the spcified name. If the optional term "populate" is included, the location will be populated with the default services.
 * @method static deletelocation() <location name> Delete the location.
 * @method static switchtolocation() <location name> Make the specified location the current location.
 * @method static listalluserprofiles() Display the names of all of the user profiles.
 * @method static listloginprofiles() <service name> Display the names of the loginwindow profiles for the specified service.
 * @method static enablesystemprofile() <service name> <on off> Enables or disables the system profile for the specified service.
 * @method static enableloginprofile() <service name> <profile name> <on off> Enables or disables the specified loginwindow profile for the specified service.
 * @method static enableuserprofile() <profile name> <on off> Enables or disables the specified user profile.
 * @method static import8021xProfiles() <service name> <file path> Imports the 802.1x profiles for the specified service.
 * @method static export8021xProfiles() <service name> <file path> <include keychain items: yes no> Exports all of the profiles for the specified service. If the last parameter is yes, it will include the items from the keychain.
 * @method static export8021xUserProfiles() <file path> <include keychain items: yes no> Exports only the user profiles. 	If the last parameter is yes, it will include the items from the keychain.
 * @method static export8021xLoginProfiles() <service name> <file path> <include keychain items: yes no> Exports only the loginwindow profiles for the specified service. 	If the last parameter is yes, it will include the items from the keychain.
 * @method static export8021xSystemProfile() <service name> <file path> <include keychain items: yes no> Exports only the system profile for the specified service. 	If the last parameter is yes, it will include the items from the keychain.
 * @method static setTLSIdEntityOnSystemProfile() <service name> <file path> <passphrase> Sets the TLS identity on the system profile for the specified service. 	The identity must be a pkcs12 file.
 * @method static setTLSIdEntityOnUserProfile() <profile name> <file path> <passphrase> Sets the TLS identity on the specified user profile. 	The identity must be a pkcs12 file.
 * @method static deleteSystemProfile(string $serviceName) Deletes the system profile for the specified service.
 * @method static deleteLoginProfile(string $serviceName, string $profileName) Deletes the specified loginwindow profile for the specified service.
 * @method static deleteUserProfile(string $profileName) Deletes the specified user profile.
 * @method static version() Display version of networksetup tool.
 * @method static printCommands() Displays a quick listing of commands (without explanations).
 */
class NetworkSetup
{
    /**
     * Display services with corresponding port and device in order they are
     * tried for connecting to a network. An asterisk (*) denotes that a service
     * is disabled.
     *
     * @return Command
     */
    public static function listNetworkServiceOrder()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Display list of services. An asterisk (*) denotes that a network service is disabled.
     */
    public static function listAllNetworkServices()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Display list of hardware ports with corresponding device name and ethernet address.
     */
    public static function listAllHardwarePorts()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Detect new network hardware and create a default network service on the hardware.
     */
    public static function detectNewHardware()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Display ethernet (or WiFi) address for hardwareport or device specified.
     *
     * @param $hardwarePortOrDeviceName
     *
     * @return Command
     */
    public static function getMacAddress($hardwarePortOrDeviceName)
    {
        return Command::make(__FUNCTION__, [$hardwarePortOrDeviceName]);
    }

    /**
     * Display the computer name.
     */
    public static function getComputerName()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Set the computer's name (if valid) to $name.
     *
     * @param string $name
     *
     * @return Command
     */
    public static function setComputerName(string $name)
    {
        return Command::make(__FUNCTION__, [$name]);
    }

    /**
     * Set the $networkService TCP/IP configuration to manual with IP address set to ip,
     * Subnet Mask set to subnet, and Router address set to router.
     *
     * @param string $networkService
     * @param string $ip
     * @param string $subnet
     * @param string $router
     *
     * @return Command
     */
    public static function setManual(string $networkService, string $ip, string $subnet, string $router)
    {
        return Command::make(__FUNCTION__, [$networkService, $ip, $subnet, $router]);
    }

    /**
     * Set the $networkService TCP/IP configuration to DHCP. You can set the DHCP client id to the optional
     * $clientId. Specify "Empty" for [clientid] to clear the DHCP client id.
     *
     * @param string $networkService
     * @param string|null $clientId
     *
     * @return Command
     */
    public static function setDHCP(string $networkService, string $clientId = null)
    {
        return Command::make(__FUNCTION__, [$networkService, $clientId]);
    }

    /**
     * Set the $networkService TCP/IP configuration to BOOTP.
     *
     * @param string $networkService
     *
     * @return Command
     */
    public static function setBOOTP(string $networkService)
    {
        return Command::make(__FUNCTION__, [$networkService]);
    }

    /**
     * Set the $networkService TCP/IP configuration to manual with DHCP router with IP address set to ip.
     *
     * @param string $networkService
     * @param string $ip
     *
     * @return Command
     */
    public static function setManualWithDHCPRouter(string $networkService, string $ip)
    {
        return Command::make(__FUNCTION__, [$networkService, $ip]);
    }

    /**
     * Get additional IPv4 routes associated with $networkService.
     *
     * @param string $networkService
     *
     * @return Command
     */
    public static function getAdditionalRoutes(string $networkService)
    {
        return Command::make(__FUNCTION__, [$networkService]);
    }

    /**
     * Display IPv4 address, IPv6 address, subnet mask, router address,
     * ethernet address for $networkService.
     *
     * @param string $networkService
     *
     * @return Command
     */
    public static function getInfo(string $networkService)
    {
        return Command::make(__FUNCTION__, [$networkService]);
    }

    /**
     * Displays a list of the current wireless interfaces on a computer.
     *
     * @return Command
     */
    public static function showInterfaces()
    {
        return Command::make(__FUNCTION__);
    }

    /**
     * Display these help listings.
     */
    public static function help()
    {
        return Command::make(__FUNCTION__);
    }
}
