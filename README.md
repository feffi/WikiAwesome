WikiAwesome
=

This is a <a href="http://www.mediawiki.org/">Mediawiki</a> extension to includes the <a href="http://fortawesome.github.io/Font-Awesome/">FontAwesome</a> CSS icon set in <a href="http://www.mediawiki.org/">Mediawiki</a> pages.

Installation Methods
=

Manual Installation
-

Add the following line in `LocalSettings.php`:

```php
require_once( $IP.'/extensions/WikiAwesome/WikiAwesome.php' );
```

Installation via github
-

```bash
cd /var/www/mediawiki
git clone https://github.com/feffi/WikiAwesome extensions/WikiAwesome
echo "require_once( $IP.'/extensions/WikiAwesome/WikiAwesome.php' );" >> LocalSettings.php
```

License
=
This Software is licensed under <a href="http://opensource.org/licenses/MIT">`The MIT License (MIT)`</a> 

> The MIT License (MIT)
> 
> Copyright (c) 2013 Kevin Wennemuth
> 
> Permission is hereby granted, free of charge, to any person obtaining a copy
> of this software and associated documentation files (the "Software"), to deal
> in the Software without restriction, including without limitation the rights
> to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
> copies of the Software, and to permit persons to whom the Software is
> furnished to do so, subject to the following conditions:
> 
> The above copyright notice and this permission notice shall be included in
> all copies or substantial portions of the Software.
> 
> THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
> IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
> FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
> AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
> LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
> OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
> THE SOFTWARE.
