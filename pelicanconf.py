#!/usr/bin/env python
# -*- coding: utf-8 -*- #
from __future__ import unicode_literals

AUTHOR = 'me'
SITENAME = 'Neurocat'
SITEURL = ''
THEME = "themes/neurocat"
PATH = 'content'

TIMEZONE = 'Europe/Paris'

DEFAULT_LANG = 'en'

MENUITEMS = (
    ('Home', '/index.html'),
    ('Products', '/pages/service.html'),
    ('About', '/pages/about.html'),
    ('News', '/category/neurocat-news.html'),
    ('Jobs', '/pages/jobs.html'),
    ('Contact','#')
)


FOOTERITEMS = (
    ('Site Notice [ENG]', '/index.html'),
    ('Site Notice [DE]', '/pages/service.html'),
    ('Privacy Policy [ENG]', '/pages/about.html'),
    ('Privacy Policy [DE]', '/category/neurocat-news.html')
)

# Feed generation is usually not desired when developing
FEED_ALL_ATOM = None
CATEGORY_FEED_ATOM = None
TRANSLATION_FEED_ATOM = None
AUTHOR_FEED_ATOM = None
AUTHOR_FEED_RSS = None

DEFAULT_PAGINATION = 10

# Uncomment following line if you want document-relative URLs when developing
#RELATIVE_URLS = True