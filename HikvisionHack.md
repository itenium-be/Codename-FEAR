Hikvision
=========

## Convert Video

Turn the video in a normal(ish) format with [ffmpeg](https://ffmpeg.org/download.html) 😃

```sh
ffmpeg –i recording.h264 -c:v libx265 -an -x265-params crf=25 OUT.mov
```
