#! /usr/bin/python

import tweepy
import praw

#Twitter authentication

twitter_consumer_key = 'zsjAEY2p2Jipfr2nmokTHoqV7'
twitter_consumer_key_secret = 'lNHxFifzoLBYk5SVA346RqOHwyXTizn0OTtu6MTeHU2tnGfPWe'

twitter_access_token = '2955247772-Urnv3b0qVHpyxsPSFDELwZNYkpFazxG1jalTrkL'
twitter_access_token_secret = 'D6hmylTt8tbrOi6g5d6GVvF6sfCewTUUkxNrIe0y88MEB'

twitter_key = tweepy.OAuthHandler(twitter_consumer_key, twitter_consumer_key_secret)
twitter_key.set_access_token(twitter_access_token, twitter_access_token_secret)

api = tweepy.API(twitter_key)


#Reddit authentication

user_agent = "Weekly Subreddit Simulator Tweeter by /u/peterfmutch"

r = praw.Reddit(user_agent=user_agent)

r.set_oauth_app_info(client_id='aiMrDmbmTX6sBA',
                    client_secret='CeBCPxEYhxKcMLKWpiieoJk4mVM',
                    redirect_uri='http://127.0.0.1:65010/'
                                 'authorize_callback')

top_submission = r.get_subreddit('SubredditSimulator').get_top_from_week(limit=1).next()

print top_submission
