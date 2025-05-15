<?php

namespace App\Services;

use Illuminate\Http\Request;
use App\Models\UserDevice;

class DeviceService
{
    public function checkDevice(Request $request)
    {
        $user = auth('admin')->user();
        $userAgent = $request->userAgent();
        $ip = $request->ip();

        $knownDevice = UserDevice::where('user_id', $user->id)
            ->where('user_agent', $userAgent)
            ->first();

        if (!$knownDevice) {
            $device = UserDevice::create([
                'user_id' => $user->id,
                'user_agent' => $userAgent,
                'ip_address' => $ip,
                'device_name' => $this->parseDevice($userAgent),
                'is_trusted' => false,
            ]);

            // Send Notification
            $user->notify(new \App\Notifications\NewDeviceLoginNotification($device));
        }
    }

    public function parseDevice($userAgent)
    {
        // Simple user agent parse — can integrate more advanced if needed
        if (str_contains($userAgent, 'iPhone')) return 'iPhone';
        if (str_contains($userAgent, 'Android')) return 'Android';
        if (str_contains($userAgent, 'Windows')) return 'Windows PC';
        if (str_contains($userAgent, 'Macintosh')) return 'Mac';

        return 'Unknown Device';
    }
}
