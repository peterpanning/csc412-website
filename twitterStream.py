import tweepy

consumer_key = 'zsjAEY2p2Jipfr2nmokTHoqV7'
consumer_key_secret = 'lNHxFifzoLBYk5SVA346RqOHwyXTizn0OTtu6MTeHU2tnGfPWe'

access_token = '2955247772-Urnv3b0qVHpyxsPSFDELwZNYkpFazxG1jalTrkL'
access_token_secret = 'D6hmylTt8tbrOi6g5d6GVvF6sfCewTUUkxNrIe0y88MEB'

key = tweepy.OAuthHandler(consumer_key, consumer_key_secret)
key.set_access_token(access_token, access_token_secret)

api = tweepy.API(key)
print api.me().name
