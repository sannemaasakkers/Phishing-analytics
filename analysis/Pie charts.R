library(ggplot2)
library(scales)
library(plyr)
library(ggforce)

set <- subset(total, select = 'experience')
frequency <- count(set, 'experience')
frequency

frequency$education[frequency$education == 'HBO'] <- 'University of Applied Science'
frequency$education[frequency$education == 'WO'] <- 'University'
frequency$education[frequency$education == 'MBO'] <- 'Mid-level education'
frequency$education[frequency$education == 'SE'] <- 'High School'

firstup <- function(x) {
  substr(x, 1, 1) <- toupper(substr(x, 1, 1))
  x
}

blank_theme <- theme_minimal()+
  theme(
    axis.title.x = element_blank(),
    axis.title.y = element_blank(),
    panel.border = element_blank(),
    panel.grid=element_blank(),
    axis.ticks = element_blank(),
    plot.title=element_text(size=14, face="bold")
)

bp <- ggplot(frequency, aes(x="", y=freq, fill=education)) + geom_bar(width = 10, stat = "identity")
bp

pie <- bp + coord_polar("y", start=0)
pie + blank_theme + scale_fill_manual(values=c("#d11141", "#00b159", "#00aedb", "#f37735", "#ffc425", "#cccccc", "#8c8c8c")) + theme(axis.text.x=element_blank())

ggsave('/Users/Sanne/Documents/GitHub/CSV/final/education.png')

plot_cols <- function(...) {
  cols <- c(...)
  
  if (is.null(cols))
    return (plot_colors)
  
  plot[cols]
}

custom_palettes <- list(`mixed` = )

mytable <- table(total$education)
lbls <- paste(names(mytable), "\n", mytable, sep="")
pie(mytable, 
    main="Education", col=terrain.colors(length(unique(total$education))))

mytable <- table(total$education)
lbls <- paste(names(mytable), "\n", mytable, sep="")
pie(mytable, 
    main="education", col=terrain.colors(length(unique(total$education))))

mytable <- table(total$education)
lbls <- paste(names(mytable), "\n", mytable, sep="")
pie(mytable, 
    main="education", col=terrain.colors(length(unique(total$education))))

write.csv(total, "/Users/Sanne/Documents/GitHub/CSV/final/total.csv")
