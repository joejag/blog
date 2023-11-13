FROM jekyll/jekyll:latest
RUN gem update --system 3.4.20
COPY Gemfile* ./
RUN gem install bundler -v 2.4.13 && bundle install
ENTRYPOINT [ "jekyll" ]
CMD [ "build" ]