clicks <- read.csv("/Users/Sanne/Documents/GitHub/CSV/28-07-2018/28-07-2018_clicks.csv", sep=';')
users <- read.csv("/Users/Sanne/Documents/GitHub/CSV/28-07-2018/28-07-2018_users.csv", sep=';')

clicks <- merge(clicks, users, by="unique_id")

clicks$mouseX <- round(clicks$mouseX * 100 / clicks$dimensionX)
clicks$mouseY <- round(clicks$mouseY * 100 / clicks$dimensionY)

clicks$created_at <- NULL
clicks$updated_at <- NULL
clicks$dimensionX <- NULL
clicks$dimensionY <- NULL
clicks$id <- NULL
clicks$id.y <- NULL

clicks <- clicks[order(clicks$id.x),] 

for(i in 1:nrow(clicks))
{
  clicks[i, "id"] <- i
}

clicks$unique_id <- as.character(clicks$unique_id)

#P1
clicks$unique_id[clicks$unique_id == 'BfkVbvCRqP'] <- 'P1'
clicks$unique_id[clicks$unique_id == 'uhOehDLWZu'] <- 'P1'

#P2
clicks$unique_id[clicks$unique_id == 'S7w2bCeOWT'] <- 'P2'
clicks$unique_id[clicks$unique_id == 'rhiB3NfjLi'] <- 'P2'

#P3
clicks$unique_id[clicks$unique_id == 'XmFxWB2Hlx'] <- 'P3'
clicks$unique_id[clicks$unique_id == '1Q0zu8QrPf'] <- 'P3'

#P4
clicks$unique_id[clicks$unique_id == 'eBncRHHie1'] <- 'P4'
clicks$unique_id[clicks$unique_id == 'WE2PFdcy8m'] <- 'P4'

#P5
clicks$unique_id[clicks$unique_id == 'K503IffCGK'] <- 'P5'
clicks$unique_id[clicks$unique_id == 'Z1wiJmxv6G'] <- 'P5'

#P6
clicks$unique_id[clicks$unique_id == 'msRPKujW90'] <- 'P6'

#P7
clicks$unique_id[clicks$unique_id == 'zUillzFjPV'] <- 'P7'
clicks$unique_id[clicks$unique_id == 'MWB7lqTALk'] <- 'P7'

#P8
clicks$unique_id[clicks$unique_id == 'YSxLSMviLw'] <- 'P8'
clicks$unique_id[clicks$unique_id == 'agJDb8W7Vp'] <- 'P8'

#P9
clicks$unique_id[clicks$unique_id == 'mcD0NW24Ev'] <- 'P9'
clicks$unique_id[clicks$unique_id == 'Zcv0IRqJjp'] <- 'P9'

#P10
clicks$unique_id[clicks$unique_id == 'G0mfjItAnu'] <- 'P10'

#P11
clicks$unique_id[clicks$unique_id == 'P0zucSAXXL'] <- 'P11'
clicks$unique_id[clicks$unique_id == 'AYWGrDMPtG'] <- 'P11'

#P12
clicks$unique_id[clicks$unique_id == 'I5hZ7TwIT7'] <- 'P12'
clicks$unique_id[clicks$unique_id == 'kTS2bh6hai'] <- 'P12'

#P13
clicks$unique_id[clicks$unique_id == '7GRrg2bOSd'] <- 'P13'
clicks$unique_id[clicks$unique_id == '9kiM9K6Jg9'] <- 'P13'

#P14
clicks$unique_id[clicks$unique_id == 'B6yC9MU7jk'] <- 'P14'
clicks$unique_id[clicks$unique_id == 'BBw1jtBRkd'] <- 'P14'

#P15
clicks$unique_id[clicks$unique_id == '2yM4PUt8Ni'] <- 'P15'
clicks$unique_id[clicks$unique_id == 'n4A7bKq18Q'] <- 'P15'

#P16
clicks$unique_id[clicks$unique_id == 'kAUdRG7J5i'] <- 'P16'
clicks$unique_id[clicks$unique_id == 'bcc9vPTgVE'] <- 'P16'

#P17
clicks$unique_id[clicks$unique_id == 'tJ5nk5ySuZ'] <- 'P17'

#P18
clicks$unique_id[clicks$unique_id == 'VZQ1o92We9'] <- 'P18'
clicks$unique_id[clicks$unique_id == 'FtORBtLl8X'] <- 'P18'

#P19
clicks$unique_id[clicks$unique_id == 'pr5anGL6lM'] <- 'P19'
clicks$unique_id[clicks$unique_id == 'Tr2JMN015o'] <- 'P19'

#P20
clicks$unique_id[clicks$unique_id == '2SL5y7KJmD'] <- 'P20'
clicks$unique_id[clicks$unique_id == 's0y872GoWf'] <- 'P20'

#P21
clicks$unique_id[clicks$unique_id == 'VmxHn2n6C9'] <- 'P21'
clicks$unique_id[clicks$unique_id == 'rXrcVA8dLQ'] <- 'P21'

#P22
clicks$unique_id[clicks$unique_id == 'GW8p8vttHt'] <- 'P22'
clicks$unique_id[clicks$unique_id == 'X35bSZXZ73'] <- 'P22'

#P23
clicks$unique_id[clicks$unique_id == 'xnyac1DODI'] <- 'P23'
clicks$unique_id[clicks$unique_id == 'eY9dECjOuQ'] <- 'P23'

#P24
clicks$unique_id[clicks$unique_id == 'CV5C2F6aaq'] <- 'P24'
clicks$unique_id[clicks$unique_id == 'a9kfkNeucA'] <- 'P24'

#P25
clicks$unique_id[clicks$unique_id == 'CcUgamxeGa'] <- 'P25'
clicks$unique_id[clicks$unique_id == 'auRTOop652'] <- 'P25'

#P26
clicks$unique_id[clicks$unique_id == 'hQ6n7ETnen'] <- 'P26'
clicks$unique_id[clicks$unique_id == 'FAWOCOFX03'] <- 'P26'

#P27
clicks$unique_id[clicks$unique_id == 'AdRapQwcjR'] <- 'P27'
clicks$unique_id[clicks$unique_id == 'UkLBTl20gu'] <- 'P27'

#P28
clicks$unique_id[clicks$unique_id == 'VTuYCwsJP3'] <- 'P28'
clicks$unique_id[clicks$unique_id == '4CHhkiTVxO'] <- 'P28'

#P29
clicks$unique_id[clicks$unique_id == 'MsVCQbKU5p'] <- 'P29'
clicks$unique_id[clicks$unique_id == 'BamgKTf3sI'] <- 'P29'

#P30
clicks$unique_id[clicks$unique_id == '7afOs7BlSW'] <- 'P30'
clicks$unique_id[clicks$unique_id == 'H4OoIXRZQ4'] <- 'P30'

# , 

legitlength <- data.frame(id=(character()),
                 result=character(),
                 stringsAsFactors=FALSE) 

for(s in c('P18', 'P19', 'P20', 'P21', 'P22', 'P24', 'P27', 'P28'))
{
  x <- results$mouseX[results$unique_id == s & results$site == 'legit']
  y <- results$mouseY[results$unique_id == s & results$site == 'legit']
  
  dataframe <- data.frame(X = x,
                          Y = y)
  
  plot(Y ~ X, data = dataframe, xlim=c(0, 100), ylim=c(500,0))
  
  length <- 0
  
  for(i in 1:nrow(dataframe)) {
    for(j in 1:nrow(dataframe)) {
      X1 <- dataframe[i,1]
      Y1 <- dataframe[i,2]
      X2 <- dataframe[j,1]
      Y2 <- dataframe[j,2]
      first <- abs((X1 - X2) * (X1 - X2))
      second <- abs((Y1 - Y2) * (Y1 - Y2))
      result <- sqrt(first + second)
      length <- length + result
    } 
  }
  
  legitlength[s,1] <- s
  legitlength[s,2] <- round(length)
}

write.csv(legitlength, file = "/Users/Sanne/Documents/GitHub/CSV/28-07-2018/length_legit.csv")
