<?php
//  'Sistema Operativo'
class So{
    public function getPlatform($user_agent){
        if (strpos($user_agent, 'Windows NT 10.0') !== false) {
            return "Windows 10";
        } elseif (strpos($user_agent, 'Windows NT 6.3') !== false) {
            return "Windows 8.1";
        } elseif (strpos($user_agent, 'Windows NT 6.2') !== false) {
            return "Windows 8";
        } elseif (strpos($user_agent, 'Windows NT 6.1') !== false) {
            return "Windows 7";
        } elseif (strpos($user_agent, 'Windows NT 6.0') !== false) {
            return "Windows Vista";
        } elseif (strpos($user_agent, 'Windows NT 5.1') !== false) {
            return "Windows XP";
        } elseif (strpos($user_agent, 'Windows NT 5.2') !== false) {
            return 'Windows 2003';
        } elseif (strpos($user_agent, 'Windows NT 5.0') !== false) {
            return 'Windows 2000';
        } elseif (strpos($user_agent, 'Windows ME') !== false) {
            return 'Windows ME';
        } elseif (strpos($user_agent, 'Win98') !== false) {
            return 'Windows 98';
        } elseif (strpos($user_agent, 'Win95') !== false) {
            return 'Windows 95';
        } elseif (strpos($user_agent, 'WinNT4.0') !== false) {
            return 'Windows NT 4.0';
        } elseif (strpos($user_agent, 'Windows Phone') !== false) {
            return 'Windows Phone';
        } elseif (strpos($user_agent, 'Windows') !== false) {
            return 'Windows';
        } elseif (strpos($user_agent, 'iPhone') !== false) {
            return 'iPhone';
        } elseif (strpos($user_agent, 'iPad') !== false) {
            return 'iPad';
        } elseif (strpos($user_agent, 'Debian') !== false) {
            return 'Debian';
        } elseif (strpos($user_agent, 'Ubuntu') !== false) {
            return 'Ubuntu';
        } elseif (strpos($user_agent, 'Slackware') !== false) {
            return 'Slackware';
        } elseif (strpos($user_agent, 'Linux Mint') !== false) {
            return 'Linux Mint';
        } elseif (strpos($user_agent, 'Gentoo') !== false) {
            return 'Gentoo';
        } elseif (strpos($user_agent, 'Elementary OS') !== false) {
            return 'ELementary OS';
        } elseif (strpos($user_agent, 'Fedora') !== false) {
            return 'Fedora';
        } elseif (strpos($user_agent, 'Kubuntu') !== false) {
            return 'Kubuntu';
        } elseif (strpos($user_agent, 'Linux') !== false) {
            return 'Linux';
        } elseif (strpos($user_agent, 'FreeBSD') !== false) {
            return 'FreeBSD';
        } elseif (strpos($user_agent, 'OpenBSD') !== false) {
            return 'OpenBSD';
        } elseif (strpos($user_agent, 'NetBSD') !== false) {
            return 'NetBSD';
        } elseif (strpos($user_agent, 'SunOS') !== false) {
            return 'Solaris';
        } elseif (strpos($user_agent, 'BlackBerry') !== false) {
            return 'BlackBerry';
        } elseif (strpos($user_agent, 'Android') !== false) {
            return 'Android';
        } elseif (strpos($user_agent, 'Mobile') !== false) {
            return 'Firefox OS';
        } elseif (strpos($user_agent, 'Mac OS X+') || strpos($user_agent, 'CFNetwork+') !== false) {
            return 'Mac OS X';
        } elseif (strpos($user_agent, 'Macintosh') !== false) {
            return 'Mac OS Classic';
        } elseif (strpos($user_agent, 'OS/2') !== false) {
            return 'OS/2';
        } elseif (strpos($user_agent, 'BeOS') !== false) {
            return 'BeOS';
        } elseif (strpos($user_agent, 'Nintendo') !== false) {
            return 'Nintendo';
        } else {
            return 'Unknown Platform';
        }

    }
}