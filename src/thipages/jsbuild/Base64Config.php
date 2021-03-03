<?php
namespace thipages\jsbuild;
class Base64Config {
    public static function getContent() {
        return [
            [
'./rollup',
'rollup.config_esm.js',
'aW1wb3J0IHJlc29sdmUgZnJvbSAnQHJvbGx1cC9wbHVnaW4tbm9kZS1yZXNvbHZlJzsNCmV4cG9ydCBkZWZhdWx0IHsNCiAgICBpbnB1dDogJy4vZXNtL2luZGV4LmpzJywNCiAgICBvdXRwdXQ6IHsNCiAgICAgICAgZmlsZTogJy4vaW5kZXguanMnLA0KICAgICAgICBmb3JtYXQ6ICdlc20nLA0KICAgIH0sDQogICAgcGx1Z2luczogWw0KICAgICAgICByZXNvbHZlKCkNCiAgICBdDQp9Ow=='
],
[
'./rollup',
'rollup.config_esm_min.js',
'aW1wb3J0IHJlc29sdmUgZnJvbSAnQHJvbGx1cC9wbHVnaW4tbm9kZS1yZXNvbHZlJzsNCmltcG9ydCB7dGVyc2VyfSBmcm9tICdyb2xsdXAtcGx1Z2luLXRlcnNlcic7DQpleHBvcnQgZGVmYXVsdCB7DQogICAgaW5wdXQ6ICcuL2VzbS9pbmRleC5qcycsDQogICAgb3V0cHV0OiB7DQogICAgICAgIGZpbGU6ICcuL2luZGV4Lm1pbi5qcycsDQogICAgICAgIGZvcm1hdDogJ2VzbScNCiAgICB9LA0KICAgIHBsdWdpbnM6IFsNCiAgICAgICAgcmVzb2x2ZSgpLA0KICAgICAgICB0ZXJzZXIoKQ0KICAgIF0NCn07DQo='
],
[
'./rollup',
'rollup.config_iife_min.js',
'aW1wb3J0IHJlc29sdmUgZnJvbSAnQHJvbGx1cC9wbHVnaW4tbm9kZS1yZXNvbHZlJzsNCmltcG9ydCBiYWJlbCBmcm9tICdyb2xsdXAtcGx1Z2luLWJhYmVsJzsNCmltcG9ydCB7dGVyc2VyfSBmcm9tICdyb2xsdXAtcGx1Z2luLXRlcnNlcic7DQpleHBvcnQgZGVmYXVsdCB7DQogICAgaW5wdXQ6ICcuL2VzbS9pbmRleC5qcycsDQogICAgb3V0cHV0OiB7DQogICAgICAgIGZpbGU6ICcuL21pbi5qcycsDQogICAgICAgIGZvcm1hdDogJ2lpZmUnLA0KICAgICAgICBuYW1lOiAnI25hbWUjJw0KICAgIH0sDQogICAgcGx1Z2luczogWw0KICAgICAgICByZXNvbHZlKCksDQogICAgICAgIGJhYmVsKHtwcmVzZXRzOiBbJ0BiYWJlbC9wcmVzZXQtZW52J119KSwNCiAgICAgICAgdGVyc2VyKCkNCiAgICBdDQp9Ow0K'
],
[
'.',
'package.json',
'ew0KICAibmFtZSI6ICIjbmFtZSMiLA0KICAidmVyc2lvbiI6ICIwLjAuMSIsDQogICJkZXNjcmlwdGlvbiI6ICIjZGVzY3JpcHRpb24jIiwNCiAgImtleXdvcmRzIjogWw0KICAgICIja2V5d29yZHMjIg0KICBdLA0KICAiYXV0aG9yIjogIiNhdXRob3IjIiwNCiAgImxpY2Vuc2UiOiAiTUlUIiwNCiAgIm1vZHVsZSI6ICJlc20vaW5kZXguanMiLA0KICAicmVwb3NpdG9yeSI6IHsNCiAgICAidHlwZSI6ICJnaXQiLA0KICAgICJ1cmwiOiAiZ2l0K2h0dHBzOi8vZ2l0aHViLmNvbS8jdXNlciMvI25hbWUjLmdpdCINCiAgfSwNCiAgImRlcGVuZGVuY2llcyI6IHt9LA0KICAiZGV2RGVwZW5kZW5jaWVzIjogew0KICAgICJAYmFiZWwvY29yZSI6ICJeNy4xMS42IiwNCiAgICAiQGJhYmVsL3ByZXNldC1lbnYiOiAiXjcuMTEuNSIsDQogICAgIkByb2xsdXAvcGx1Z2luLW5vZGUtcmVzb2x2ZSI6ICJeOS4wLjAiLA0KICAgICJyb2xsdXAtcGx1Z2luLWJhYmVsIjogIl40LjQuMCIsDQogICAgInJvbGx1cC1wbHVnaW4tdGVyc2VyIjogIl43LjAuMiINCiAgfSwNCiAgInNjcmlwdHMiOiB7DQogICAgImJ1aWxkIjogIm5wbSBydW4gcm9sbHVwOmVzbSAmJiBucG0gcnVuIHJvbGx1cDppaWZlX21pbiAmJiBucG0gcnVuIHJvbGx1cDplc21fbWluICYmIG5wbSBydW4gcm9sbHVwOmVzbV93YXRjaCIsDQogICAgInJvbGx1cDppaWZlX21pbiI6ICJyb2xsdXAgLS1jb25maWcgcm9sbHVwL3JvbGx1cC5jb25maWdfaWlmZV9taW4uanMiLA0KICAgICJyb2xsdXA6ZXNtX21pbiI6ICJyb2xsdXAgLS1jb25maWcgcm9sbHVwL3JvbGx1cC5jb25maWdfZXNtX21pbi5qcyIsDQogICAgInJvbGx1cDplc20iOiAicm9sbHVwIC0tY29uZmlnIHJvbGx1cC9yb2xsdXAuY29uZmlnX2VzbS5qcyIsDQogICAgInJvbGx1cDplc21fd2F0Y2giOiAicm9sbHVwIC0tY29uZmlnIHJvbGx1cC9yb2xsdXAuY29uZmlnX2VzbS5qcyAtLXciDQogIH0NCn0NCg=='
]
        ];
    }
}