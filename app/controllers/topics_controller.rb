class TopicsController < ApplicationController
  require 'date'
  def index
    @topics = Topic.all.order('created_at DESC')
    @responses = Response.where(created_at: Date.yesterday.beginning_of_day..Date.tomorrow.end_of_day).group(:topic_id).count
  end

  def new
  end

  def create
    Topic.create(topic_params)
  end

  private
  def topic_params
    params.permit(:title)
  end

end
