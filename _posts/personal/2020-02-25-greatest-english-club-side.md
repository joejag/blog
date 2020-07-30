---
layout: post
categories: ['blog']
title: Greatest English Club Side
---

Last night on Monday Night Football the hosts [Gary Neville](https://twitter.com/GNev2) and [Jamie Carragher](https://twitter.com/Carra23) spent about an hour discussing the hot topic of ["Greatest English Club Side"](https://www.skysports.com/football/news/11095/11942628/monday-night-football-jamie-carragher-and-gary-neville-rank-the-greatest-english-club-sides) ever.

The cool thing for me was that they created a scoring mechanism:

<img alt='euro cups and league wins get the highest scores' width="100%" src="{{ site.url }}/images/2020/scores.jpg" />

They then agreed that a three year period is the justification for a great team, which seems fair to represent a period of dominance.

They applied their scoring mechanism to every season since the second world war and came up with this chart:

<img alt='euro cups and league wins get the highest scores' width="100%" src="{{ site.url }}/images/2020/table.jpg" />

Something irked me though, I felt like another Liverpool team could fit in there, and the hosts were using their nostalgia to choose some of the teams on the list. So - being a massive geek with nothing better to do on a Tuesday night - I download the raw data for all the competitions for the league and [wrote a program](https://github.com/joejag/best_english_football_team_ever) to re-calculate their league table.

The results were quite different, and have added in the current Manchester City team as one of the greatest to have ever played in the English league. Here is the computer-generated, and less nostalgia-based, version that I've made from raw data:

| Seasons | Team              | MNF Points | Trophies                                                                     |
| ------- | ----------------- | ---------- | ---------------------------------------------------------------------------- |
| 1975-78 | Liverpool         | 23         | European cup (2), league (2), UEFA Cup, league runner up, super cup          |
| 2006-09 | Manchester United | 21         | European cup, league (3), European cup runner up, league cup, club world cup |
| 1981-84 | Liverpool         | 20         | European cup, league (3), league cup (3)                                     |
| 1998-01 | Manchester United | 20         | European cup, league (3), fa cup, Intercontinental Cup                       |
| 1977-80 | Nottingham Forest | 18         | European cup (2), league, league cup (2), league runner up, super cup        |
| 2009-12 | Chelsea           | 14         | European cup, league, fa cup (2), league runner up                           |
| 1978-81 | Liverpool         | 14         | European cup, league (2), league cup                                         |
| 2004-07 | Chelsea           | 13         | league (2), fa cup, league cup (2), league runner up                         |
| 1993-96 | Manchester United | 13         | league (2), fa cup (2), league runner up                                     |
| 2001-04 | Arsenal           | 13         | league (2), fa cup (2), league runner up                                     |
| 2016-19 | Manchester City   | 12         | league (2), fa cup, league cup (2)                                           |
| 1960-63 | Tottenham Hotspur | 12         | league, fa cup (2), league runner up, cup winners cup                        |
| 1984-87 | Everton           | 12         | league (2), cup winners cup, league runner up                                |

Notable differences:

- Chelsea 2009-12 were ignored entirely and get in
- Liverpool 1978-81 sneaked in as another three years of dominance
- Manchester United 1993-96 creep in
- Manchester City 2016-19 creep in
- Villa 80-83, Leeds 68-71 and a United team from 65-68 get bumped out

Thanks again to Gary and Jamie for coming up with the scoring mechanism. It was fascinating to hear their thoughts and memories.

While looking over the data, I was also able to look at years when teams had been the most dominant in the last three years, then look for a sustained period. So here is the list of teams that were the best within any given three year period for a sustained amount of time:

| Team                    | Seasons   | Seasons on top |
| ----------------------- | --------- | -------------- |
| Manchester United       | 1990-2001 | 11             |
| Liverpool               | 1979-1985 | 6              |
| Liverpool               | 1972-1978 | 6              |
| Manchester United       | 2006-2010 | 4              |
| Arsenal                 | 2001-2004 | 3              |
| Liverpool               | 1986-1989 | 3              |
| Manchester United       | 1965-1968 | 3              |
| Tottenham Hotspur       | 1960-1963 | 3              |
| Wolverhampton Wanderers | 1957-1960 | 3              |

Brian Clough's Nottingham Forest team punctuates Liverpool's 1970-80s dominance. So it's Gary Neville's United team of the 1990s that we should see as the greatest over a long period.

We'll see if Guardiola's or Klopp's teams come in, but they aren't near yet.
