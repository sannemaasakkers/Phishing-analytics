pageMotion <- data.frame(unique_id=character(60),
                          site=character(60),
                          time=character(60),
                          stringsAsFactors=FALSE)

for(p in unique(results$unique_id))
{
  for(s in results$site[results$unique_id == p])
  {
    result <- 0

    for(i in results$page[results$unique_id == p & results$site == s])
    {
      if(i != 440 & i != 649 & i != 650 & i != 651) {
       result <- result + (max(results$timestamp[results$unique_id == p & results$site == s & results$page == i]) - min(results$timestamp[results$unique_id == p & results$site == s & results$page == i]))
       result
      }
    }
  }
  pageMotion$unique_id <- p
  pageMotion$site <- s
  pageMotion$time <- result
}

pageMotion2 <- data.frame(unique_id=character(60),
                         site=character(60),
                         page=character(60),
                         time=character(60),
                         stringsAsFactors=FALSE)
r <- 1

for(r in 1:length(unique(results$page) - 2))
{
  if(r != 440 & r != 649 & r != 650 & r != 651)
  {
    result <- max(results$timestamp[results$page == r]) - min(results$timestamp[results$page == r])

    pageMotion2$unique_id <- unique(results$unique_id[results$page == r])
    pageMotion2$site <- unique(results$site[results$page == r])
    pageMotion2$page <- r
    pageMotion2$time <- result
  }
}

for(z in 1:3)
{
  result <- max(results$timestamp[results$page == z]) - min(results$timestamp[results$page == z])
  result
}

min(results$timestamp[results$unique_id == 'P3' & results$site == 'phishing' & results$page == '64'])
max(results$timestamp[results$unique_id == 'P3' & results$site == 'phishing' & results$page == '64'])
