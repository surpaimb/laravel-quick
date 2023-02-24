<?php
namespace Surpaimb\LaravelQuick\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class  CacheClient
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          rememberForever($key, \Closure $param)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          setDefaultCacheTime(\Illuminate\Config\Repository $config)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          getDefaultCacheTime()
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          increment($key, int $value)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          decrement($key, int $value)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          remember($fmt, int $int, \Closure $param)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hGet($sKey, $field)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hSet($sKey, $field, $content, $time = NULL)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hDel($key, $hashKey1, $hashKey2 = NULL, $hashKeyN = NULL)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hIncrBy($key, $field, $increment, $ttl = NULL)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hLen($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          hExists($sKey, $field)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          lRem($sKey, $value, $count)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          lRange($sKey, $start, $end)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          lLen($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          lPush($sKey, $value)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          rPush($sKey, $value)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          rPop($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          lPop($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          pfAdd($sKey, $value)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          pfCount($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          zAdd($sKey, $score1, $value1)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          zCount($sKey, $start, $end)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          zRemRangeByScore($sKey, $start, $end)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          redisExpire($key, $ttl)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          incrementEx($key, $value = 1, $ttl = NULL)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          decrementEx($key, $value = 1, $ttl = NULL)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          flushAll()
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          sCard($sKey)
 * @method static \Surpaimb\LaravelQuick\Services\CacheService          sAdd($key, $value)
 */
class CacheClient extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'quick.cache.service';
    }
}
