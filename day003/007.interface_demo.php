<?php
/**
 * 播放接口
 */
interface Player
{
  function play();
  function stop();
  function next();
  function prev();
}

/**
 * USB接口
 */
interface USBset
{
  const USBWidth = 12;// 宽度，单位mm
  const USBHeight = 5; //高度，单位mm
  function dataIn();//数据输入
  function dataOut();//数据输出
}

/**
 * mp3播放器类，它同时具有播放器的功能，也具有usb设备的特征和功能
 * 则，这里就可以从这2个接口获取其“特征信息”，并在其中实现它；
 */
class MP3Player implemments Player, USBset
{
  function play(){}
  function stop(){}
  function next(){}
  function prev(){}
  function dataIn(){}
  function dataOut(){}
}
